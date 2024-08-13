# networkDraw
Code to visualize a phylogenetic network given as an arc list and to transform it into an eNewick string

Demo at https://phylnet.univ-mlv.fr/recophync/networkDraw.php

Several files visible in the demo are not included in this repository:
* institution logos, stored in the `logos` folder
* codes and images of the networks, stored in the `networks` folder: thumbnails of the images were included as "faire use" in the demo website but we cannot distribute them under the MIT license without authorization from the authors; the codes of networks (edge list files with the .el extension) can be downloaded from <a href="https://doi.org/10.57745/VIW7B2">https://doi.org/10.57745/VIW7B2</a>
* Javascript libraries, stored in the `js` folder: `jquery.min.js` is jQuery 1.3.2 (available at https://cdnjs.cloudflare.com/ajax/libs/jquery/1.3.2/jquery.min.js) and `viz.js` is a Javascript version of GraphViz (available at https://cdnjs.cloudflare.com/ajax/libs/viz.js/0.0.4/viz.js, see https://cdnjs.com/libraries/viz.js/0.0.4)

== Python script `arcListToENewick.py` ==

How to use (with networks provided as arc lists, one arc per line - tail whitespace head - in the .el format, UTF-8 encoding):
* put the files with extension .el, cotaining arc lists, in a "networks" folder in the same folder as the `arcListToENewick.py` script
* run the script by executing in the console the following command: `python arcListToENewick.py`
* for each text file in the todo folder, a new file with the same name and the extra extension .enewick is added into the same folder
