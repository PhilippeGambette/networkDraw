# coding: utf8
#!/usr/sfw/bin/python

"""
How to use (with networks provided as arc lists, one arc per line - tail whitespace head - in the .el format, UTF-8 encoding):
- put the files with extension .el, cotaining arc lists, in the "networks" folder
- run the script by executing in the console the following command: python arcListToENewick.py
- for each text file in the todo folder, a new file with the same name and the extra extension .enewick is added into the same folder
"""

import glob, os, re, sys
from io import open

def eNewick(source, digraph, inDegree, internalNodesDisplay):
    global reticulationVerticesFound
    global visited
    global reticulationVertices
    eNewickString = ""
    # if source is a reticulation vertex, compute its number
    if inDegree[source] > 1:
        if source not in reticulationVertices:
            reticulationVerticesFound += 1
            reticulationNumber = reticulationVerticesFound
            reticulationVertices[source] = reticulationVerticesFound
        else:
            reticulationNumber = reticulationVertices[source]

    if visited[source] == 0:
        # if source was not visited yet, recursively visit its children
        visited[source] = 1
        if source in digraph:
            eNewickString = "("
            i = 0
            for child in digraph[source]:
                if i > 0:
                    eNewickString += ","
                eNewickString += eNewick(child, digraph, inDegree, internalNodesDisplay)
                i += 1
            eNewickString += ")"
    if internalNodesDisplay == 1 or not(source in digraph):
        eNewickString += source
    # if source is a reticulation vertex, label it with its number
    if inDegree[source] > 1:
        eNewickString += "#H" + str(reticulationNumber)
    return eNewickString
   
# store in the folder variable the address of the folder containing this program
folder = os.path.abspath(os.path.dirname(sys.argv[0]))

# Consider all .el files in the data folder
for file in glob.glob(folder+"\\networks\\*.el"):
   # Display the address of the file being treated
   print("Currently converting file " + file + " to the eNewick format.")
   inputFile = open(file,"r",encoding='utf-8')
   outputFile = open(file+".enewick","w",encoding='utf-8')
   digraph = {}
   visited = {}
   inDegree = {}
   for line in inputFile:
      res = re.search("^(.*)[\r\n]*$", line)
      if res: 
         arc = res.group(1).split(" ")
         # Display the arc in the DOT language
         print("\"" + arc[0] + "\" -> \"" + arc[1] + "\";\n")
         if arc[0] not in digraph:
            digraph[arc[0]] = []
         visited[arc[0]] = 0
         visited[arc[1]] = 0
         # Update the indegree of the head of the arc
         if arc[1] not in inDegree:
             inDegree[arc[1]] = 1
         else:
             inDegree[arc[1]] += 1
         # Add indegree 0 to the tail of the arc if it has not been visited yet
         if arc[0] not in inDegree:
             inDegree[arc[0]] = 0
         # Add the arc to the digraph array
         digraph[arc[0]].append(arc[1])

   # Find the root
   root = "r"
   for node,degree in inDegree.items():
      if degree == 0:
         root = node
    
   reticulationVerticesFound = 0
   reticulationVertices = {}
   
   converted = eNewick(root, digraph, inDegree, 0)
   outputFile.writelines(converted+";")
   
   outputFile.close()
   inputFile.close()