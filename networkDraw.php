<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>RecoPhyNC - Recognition of Phylogenetic Network Classes</title>
  <meta name="Description" content="RecoPhyNC - Recognition of Phylogenetic Network Classes">
  <link rel="stylesheet" type="text/css" media="screen" href="style.css"/>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<SCRIPT TYPE="text/javascript" SRC="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<SCRIPT TYPE="text/javascript">
$(document).ready(function(){
  
  $(".imageExample").append(function(){
    var number=$(this).attr("id");
    number="n"+number.substring(7,number.length+1);
    return '<img src="./networks/'+number+'.jpg" alt="Network '+number+'">';
  });
  
  $(".imageExample").attr("href",function(){
    var number = $(this).attr("id");
    console.log(number)
    number="n"+number.substring(7,number.length+1);
    $("#titleAnchor").after('<a name="form_'+number+'"></a>');
    console.log($("#"+number).parent().prev())
    console.log("toto");
    $(this).attr("title","Figure from: '"+($("#"+number).parent().prev().prev().html()).replace(/(<([^>]+)>)/ig,"")+"'");
    return "#form_"+number;
  });
  
  $(".loadExample").on("click",function(e){
    //e.preventDefault();
    //console.log("./networks/"+$(this).attr("id")+".el")
    $("#DOTcode").load("./networks/"+$(this).attr("id")+".el");
    $("")
  });
  
  $(".imageExample").on("click",function(e){
    var number=$(this).attr("id");
    number="n"+number.substring(7,number.length+1);
    $("#DOTcode").load("./networks/"+number+".el");
    $("")
  });

});

</SCRIPT>
<body style="font-family:Calibri,Arial,sans-serif">
<a name="title" id="titleAnchor"></a>
<h1>Visualization of a rooted phylogenetic network</h1>

<form action="networkDrawn.php" method="post">
Please type in the code of the phylogenetic network you would like to visualize, as a list of arcs, one arc on each line,
with the name of the first vertex (a sequence of digits and/or letters) followed by a whitespace (or anything containing neither digits nor letters),
followed by the name of the second vertex (also a sequence of digits and/or letters).<br/>
After you click the "Submit" button, this website will use <b>GraphViz</b> to draw it for you!
<br/>
<br/>
This collection of networks is also used <a href="http://phylnet.univ-mlv.fr/tools/recoPhyNC.php">in this tool</a> which checks which classes of phylogenetic networks they belong to.
The data is provided as a set of arc list files in the dataset available at <a href="https://doi.org/10.57745/VIW7B2">https://doi.org/10.57745/VIW7B2</a>.
The code is available under the MIT license at <a href="https://github.com/PhilippeGambette/networkDraw">https://github.com/PhilippeGambette/networkDraw</a>
<br/>
<br/>
<textarea name="DOTcode" id="DOTcode" col=10 rows=10>
50a 26
50a 24
A51 46
A51 43
52 8
52 4
53 25
53 30
54 36
54 39
55 6
55 5
56 37
56 31
57 44
57 22
58 29
59 50a
59 19
60 58
60 11
61 15
62 27
62 18
63 10
63 49
64 35
65 54
66 7
66 57
67 3
68 28
69 47
69 65
70 55
71 A51
71 67
72 41
72 45
73 48
74 73
75 60
76 20
77 42
78 2
78 59
79 69
80 68
80 1
81 62
82 40
82 16
83 76
83 66
84 53
84 61
85 80
86 81
87 17
87 86
88 86
88 23
89 32
89 82
90 71
91 65
92 77
93 12
94 21
95 56
95 90
96 85
96 75
97 79
97 93
98 70
98 95
99 67
99 79
100 14
101 89
102 83
102 76
103 84
103 77
104 90
104 93
105 78
106 52
106 92
107 96
108 9
108 97
109 106
110 68
110 70
111 101
111 13
112 110
112 100
113 64
113 33
114 38
115 87
115 111
116 105
116 94
117 109
117 98
118 63
119 103
120 0
120 114
121 116
121 119
122 117
123 102
124 99
125 104
126 107
127 122
127 108
128 118
128 94
129 74
129 85
130 124
131 118
131 72
132 131
132 120
133 58
133 125
134 128
134 100
135 113
135 114
136 109
137 81
137 112
138 74
138 137
139 132
139 92
140 127
140 122
141 107
142 123
143 142
143 126
144 75
144 133
145 130
146 119
147 124
147 91
148 105
148 64
149 146
149 145
150 34
151 91
151 126
152 148
153 136
153 141
154 123
154 130
155 151
155 115
156 129
157 140
158 61
158 152
159 101
159 156
160 159
160 153
161 88
162 147
162 138
163 160
163 157
164 142
165 162
166 149
166 146
167 152
168 150
169 168
169 164
170 135
171 139
171 73
172 158
172 161
173 155
173 161
174 165
174 169
175 168
175 173
176 121
176 143
177 163
178 170
179 157
180 175
180 177
181 171
181 177
182 181
182 154
183 178
183 125
184 134
184 179
185 184
185 170
186 167
187 178
188 187
189 180
189 182
190 189
191 186
192 188
192 167
193 191
193 176
194 145
194 172
195 194
195 166
196 150
197 195
198 174
198 187
199 141
199 156
200 196
200 164
201 144
201 197
202 193
202 201
203 185
203 165
204 203
205 183
205 192
206 202
207 190
207 191
208 136
209 205
210 207
210 209
211 179
211 190
212 188
212 186
213 212
214 204
215 197
216 206
216 208
217 200
217 216
218 217
218 208
219 209
220 218
221 199
221 206
222 215
223 214
223 204
224 211
225 222
225 224
226 220
226 210
227 222
228 198
229 213
229 219
230 214
231 223
231 227
232 230
233 227
233 225
234 229
234 219
235 196
236 232
236 213
237 228
237 220
238 236
238 235
239 231
240 233
241 215
242 237
243 235
244 228
244 239
245 244
246 239
246 224
247 245
247 234
248 247
248 241
249 230
249 240
250 249
251 248
251 240
252 245
252 250
253 243
253 238
254 243
254 246
255 252
255 221
256 242
257 256
258 256
259 257
259 226
260 253
260 242
261 258
261 260
262 258
262 251
263 257
263 232
264 262
265 241
265 264
266 264
267 255
268 266
269 250
270 263
270 268
271 261
272 267
272 266
273 271
273 254
274 267
274 259
275 269
275 265
276 269
276 275
277 273
278 268
279 272
280 277
281 270
282 271
283 274
283 279
284 283
285 281
286 280
286 282
287 279
287 284
288 284
289 286
289 288
290 289
290 285
291 288
291 276
292 287
293 292
293 278
294 280
294 278
295 292
296 282
296 291
297 294
298 297
298 290
299 297
300 299
300 277
301 298
302 293
302 300
303 296
303 295
304 303
305 304
306 301
307 302
307 306
308 306
308 285
309 305
310 281
310 301
311 295
312 310
312 307
313 311
313 312
314 313
315 304
316 315
316 311
317 315
317 316
318 317
318 309
319 299
319 309
320 318
321 308
321 314
322 320
323 321
323 319
324 314
325 322
325 324
326 322
327 324
327 326
328 327
329 323
329 325
330 326
330 320
331 329
332 305
332 328
333 331
333 328
334 333
334 332
335 334
336 335
336 331
337 336
338 337
338 330
339 338
340 335
340 339
341 337
341 339
342 340
342 341
</textarea><br/>
<input type="submit" value="Draw this network!">
</form>
<br/>
<br/>

<h2>Examples</h2>
<p>You can load examples of 28 phylogenetic networks found in the literature:
<ul>
<!-- ATTENTION ! S'il n'y a pas de nom de journal, ajouter les balises <i></i> après le titre du document -->
<li>Figure 7 of Zhang L., Abhari N., Colijn C., Wu Y. (2023). <a href="https://genome.cshlp.org/content/33/7/1053.full.pdf#page=7">A fast and scalable method for inferring phylogenetic networks from trees by aligning lineage taxon strings</a>. <i>Genome Research</i> 33:1053–1060 <b>&rarr; <a href="#form_n37" id="n37" class="loadExample">load this network!</a></b></li>
<li>Figure 5b of Wheeler, W., Washburn, A. (2023). <a href="https://onlinelibrary.wiley.com/doi/pdf/10.1111/cla.12552">Parsimony optimization of phylogenetic networks</a>. <i>Cladistics</i> 39:456–474 <b>&rarr; <a href="#form_n36" id="n36" class="loadExample">load this network!</a></b> </li>
<li>Figure 3.4 at page 99 of Willems, M. (2018). <a href="https://archipel.uqam.ca/11720/1/D3464.pdf#page=118">Nouveaux algorithmes pour l'inférence de réseaux phylogénétiques</a>. <i></i>Phd thesis presented at UQAM (Université du Québec à Montréal) <b>&rarr; <a href="#form_n34" id="n34" class="loadExample">load this network!</a></b></li>
<li>Figure 4.6 at page 139 of Willems, M. (2018). <a href="https://archipel.uqam.ca/11720/1/D3464.pdf#page=158">Nouveaux algorithmes pour l'inférence de réseaux phylogénétiques</a>. <i></i>Phd thesis presented at UQAM (Université du Québec à Montréal) <b>&rarr; <a href="#form_n35" id="n35" class="loadExample">load this network!</a></b></li>
<li>Figure 1 of Wu, D.-D. et al. (2018). <a href="<!--http://dx.doi.org/10.1038/s41559-018-0562-y-->http://www.nielsenlab.org/wp-content/uploads/2018/05/s41559-018-0562-y.pdf">Pervasive introgression facilitated domestication and adaptation in the <i>Bos</i> species complex</a>. <i>Nature Ecology &amp; Evolution</i> 2:1139–1145 <b>&rarr; <a href="#form_n31" id="n31" class="loadExample">load this network!</a></b></li>
<li>Figure 4 of Glemin, S., Scornavacca, C., Dainat, J., Burgarella, C., Viader, V., Ardisson, M., Sarah, G., Santoni, S., David, J. &amp; Ranwez, V. (2018). <a href="https://dx.doi.org/10.1101/300848">Pervasive hybridizations in the history of wheat relatives</a>. <i></i>bioRXiv manuscript <b>&rarr; <a href="#form_n28" id="n28" class="loadExample">load this network!</a></b></li>
<li>Figure 4 of Oldman, J., Wu, T., van Iersel, L. &amp; Moulton, V. (2016). <a href="http://doi.org/10.1093/molbev/msw068">TriLoNet: Piecing Together Small Networks to Reconstruct Reticulate Evolutionary Histories</a>. <i>Molecular Biology and Evolution</i> 33(8)1:2151–2162 <b>&rarr; <a href="#form_n30" id="n30" class="loadExample">load this network!</a></b></li>
<li>Figure 3 of Mallick, S. et al. (2016). <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5161557/">The Simons Genome Diversity Project: 300 genomes from 142 diverse populations</a>. <i>Nature</i> 538(7624):201–206 <b>&rarr; <a href="#form_n29" id="n29" class="loadExample">load this network!</a></b></li>
<li><a href="http://journals.plos.org/plosgenetics/article?id=10.1371/journal.pgen.1005896#article1.body1.sec3.sec2.p1">Figure 10</a> of Solís-Lemus, C. &amp; Ané, C. (2016). <a href="http://dx.doi.org/10.1371/journal.pgen.1005896">Inferring Phylogenetic Networks with Maximum Pseudolikelihood under Incomplete Lineage Sorting</a>. <i>PLoS Genetics</i> 12(3):e1005896 <b>&rarr; <a href="#form_n27" id="n27" class="loadExample">load this network!</a></b></li>
<li>Figure 7 of Yu Y., Jermaine C. &amp; Nakhleh L. (2016). <a href="http://dx.doi.org/10.1186/s12864-016-3099-y">Exploring phylogenetic hypotheses via Gibbs sampling on evolutionary networks</a>. <i>BMC Genomics</i> 17:3099 <b>&rarr; <a href="#form_n24" id="n24" class="loadExample">load this network!</a></b></li>
<li>Figure 6 of Wen, D., Yu, Y., Hahn, M. W. &amp; Nakhleh, L. (2016). <a href="http://dx.doi.org/10.1111/mec.13544">Reticulate evolutionary history and extensive introgression in mosquito species revealed by phylogenetic network analysis</a>. <i>Molecular Ecology</i> 25(11):2361-2372 <b>&rarr; <a href="#form_n10" id="n10" class="loadExample">load this network!</a></b></li>
<li>Figure 1 of Lake J. A., Larsen J., Sarna B., de la Haba R. R., Pu Y., Koo H. M., Zhao J. &amp; Sinsheimer J. S. (2016). <a href="http://dx.doi.org/10.1093/gbe/evv221">Rings Reconcile Genotypic and Phenotypic Evolution within the <i>Proteobacteria</i></a>. <i>Genome Biology and Evolution</i> 7(12):3434-3442 <b>&rarr; <a href="#form_n5" id="n5" class="loadExample">load this network!</a></b></li>
<li>Figure 7 of Szöllősi, G. J., Davín, A. A., Tannier, E., Daubin, V., &amp; Boussau, B. (2015). <a href="http://dx.doi.org/10.1098/rstb.2014.0335">Genome-scale phylogenetic analysis finds extensive gene transfer among fungi</a>. <i>Phil. Trans. R. Soc. B</i> 370(1678):20140335 <b>&rarr; <a href="#form_n19" id="n19" class="loadExample">load this network!</a></b></li>
<li>Figure 2 of Skoglund, P., Mallick, S., Bortolini, M. C., Chennagiri, N., Hünemeier, T., Petzl-Erler, M. L., ... &amp; Reich, D. (2015). <a href="http://dx.doi.org/10.1038/nature14895">Genetic evidence for two founding populations of the Americas</a>. <i>Nature</i> 525(7567):104-108 <b>&rarr; <a href="#form_n16" id="n16" class="loadExample">load this network!</a></b></li>
<li>Figure 1C of Fontaine, M. C. et al. (2015). <a href="http://dx.doi.org/10.1126/science.1258524">Extensive introgression in a malaria vector species complex revealed by phylogenomics</a>. <i>Science</i> 347(6217) <b>&rarr; <a href="#form_n8" id="n8" class="loadExample">load this network!</a></b></li>
<li>Figure 6 of Qin, P. &amp; Stoneking, M. (2015). <a href="http://dx.doi.org/10.1093/molbev/msv141">Denisovan ancestry in East Eurasian and Native American populations</a>. <i>Molecular Biology and Evolution</i> 32:2665-2674 <b>&rarr; <a href="#form_n7" id="n7" class="loadExample">load this network!</a></b></li>
<li>Figure 2 of Raghavan, M., Skoglund, P., Graf, K. E., Metspalu, M., Albrechtsen, A., Moltke, I., ... &amp; Karmin, M. (2014). <a href="http://dx.doi.org/10.1038/nature12736">Upper Palaeolithic Siberian genome reveals dual ancestry of Native Americans</a>. <i>Nature</i>, 505(7481), 87-91 <b>&rarr; <a href="#form_n17" id="n17" class="loadExample">load this network!</a></b></li>
<li>Figure from <a href="http://phylonetworks.blogspot.fr/2015/01/complex-hybridizations-in-wheat.html"><i>The Genealogical World of Phylogenetic Networks</i></a>, derived from Marcussen, T., Sandve, S. R., Heier, L., Spannagl, M., Pfeifer, M., Jakobsen, K. S., ... &amp; Rogers, J. (2014). <a href="http://dx.doi.org/10.1126/science.1250092">Ancient hybridizations among the ancestral genomes of bread wheat</a>. <i>Science</i> 345(6194):1250092 <b>&rarr; <a href="#n15" id="n15" class="loadExample">load this network!</a></b></li>
<li>Figure 15 from Willems, M., Tahiri, N. &amp; Makarenkov, V. (2014). <a href="http://accueil.labunix.uqam.ca/~makarenkov_v/makarenv/Article_JBCB.pdf">A new efficient algorithm for inferring explicit hybridization networks following the Neighbor-Joining principle</a>. <i>Journal of Bioinformatics and Computational Biology</i> 12(05):1450024.1-27 <b>&rarr; <a href="#form_n25" id="n25" class="loadExample">load this network!</a></b></li>
<li>Figure 8 of Prüfer, K., Racimo, F., Patterson, N., Jay, F., Sankararaman, S., Sawyer, S., ... &amp; Li, H. (2014). <a href="http://dx.doi.org/10.1038/nature12886">The complete genome sequence of a Neanderthal from the Altai Mountains</a>. <i>Nature</i>, 505(7481), 43-49 <b>&rarr; <a href="#form_n21" id="n21" class="loadExample">load this network!</a></b></li>
<li>Figure 4 of Unmack, P. J., Dowling, T. E., Laitinen, N. L., Secor, C. L., Mayden, R. L., Shiozawa, D. K, Smith, G. R. (2014). <a href="<https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0090061#pone-0090061-g004">Influence of Introgression and Geological Processes on Phylogenetic Relationships of Western North American Mountain Suckers (<i>Pantosteus</i>, Catostomidae)</a>. <i>PLoS ONE</i> 9(3):e90061 <b>&rarr; <a href="#form_n33" id="n33" class="loadExample">load this network!</a></b></li>
<li>Figure 5 of Kannan L. &amp; Wheeler WC (2014). <a href="http://dx.doi.org/10.1089%2Fcmb.2013.0134">Exactly Computing the Parsimony Scores on Phylogenetic Networks Using Dynamic Programming</a>. <i>Journal of Computational Biology</i> 21(4):303–319 <b>&rarr; <a href="#form_n4" id="n4" class="loadExample">load this network!</a></b></li>
<li>Figure 3 of Lazaridis I et al. (2014). <a href="http://dx.doi.org/10.1038/nature13673">Ancient human genomes suggest three ancestral populations for present-day Europeans</a>, <i>Nature</i> 513:409-413 <b>&rarr; <a href="#form_n14" id="n14" class="loadExample">load this network!</a></b></li>
<li>Figure 2 of von Zabern I, Wagner FF, Moulds JM, Moulds JJ &amp; Flegel WA (2013). <a href="http://dx.doi.org/10.1111%2Ftrf.12145">D category IV: a group of clinically relevant and phylogenetically diverse partial D</a>. <i>Transfusion</i> 53:2960–2973 <b>&rarr; <a href="#form_n3" id="n3" class="loadExample">load this network!</a></b></li>
<li>Figure 2 of Jenkins P. A., Song Y. S. &amp; Brem R. B. (2012). <a href="http://dx.doi.org/10.1371/journal.pone.0046947">Genealogy-Based Methods for Inference of Historical Recombination and Gene Flow and Their Application in <i>Saccharomyces cerevisiae</i></a>. <i>PLoS ONE</i> 7(11):e46947 <b>&rarr; <a href="#form_n1" id="n1" class="loadExample">load this network!</a></b></li>
<li>Figure 5 of Sessa, E. B., Zimmer, E. A. &amp; Givnish, T. J. (2012). <a href="http://dx.doi.org/10.1186/1471-2148-12-104">Unraveling reticulate evolution in North American <i>Dryopteris</i> (Dryopteridaceae)</a>. <i>BMC Evolutionary Biology</i> 12:104 <b>&rarr; <a href="#form_n11" id="n11" class="loadExample">load this network!</a></b></li>
<li>Figure 4 of Marcussen, T., Jakobsen, K.S., Danihelka, J., Ballard, H. E., Blaxland K., Brysting, A. K. &amp; Oxelman, B. (2012). <a href="http://dx.doi.org/10.1093/sysbio/syr096">Inferring Species Networks from Gene Trees in High-Polyploid North American and Hawaiian Violets (<i>Viola</i>, Violaceae)</a>. <i>Systematic Biology</i> 61(1):107-126 <b>&rarr; <a href="#form_n2" id="n2" class="loadExample">load this network!</a></b></li>
<li>Figure 3 of Reich, D. et al. (2011). <a href="http://dx.doi.org/10.1016/j.ajhg.2011.09.005">Denisova admixture and the first modern human dispersals into Southeast Asia and Oceania</a>. <i>The American Journal of Human Genetics</i> 89(4):516-528 <b>&rarr; <a href="#form_n18" id="n18" class="loadExample">load this network!</a></b></li>
<!---->
<li><a href="http://www.plantcell.org/content/plantcell/21/7/1897/F6.large.jpg">Figure 6</a> of Richards T. A., Soanes D. M., Foster P. G., Leonard G., Thornton C. R. &amp; Talbot N. J. (2009). <a href="http://dx.doi.org/10.1105/tpc.109.065805">Phylogenomic Analysis Demonstrates a Pattern of Rare and Ancient Horizontal Gene Transfer between Plants and Fungi</a>. <i>The Plant Cell</i> 21(7):1897-1911 <b>&rarr; <a href="#form_n26" id="n26" class="loadExample">load this network!</a></b></li>
<li>Figure 3 of Charlton, N. D., Carbone, I., Tavantzis, S. M. &amp; Cubeta, M. A. (2008). <a href="http://dx.doi.org/10.3852/07-108R">Phylogenetic relatedness of the M2 double-stranded RNA in <i>Rhizoctonia</i> fungi</a>. <i>Mycologia</i> 100(4):555-564 <b>&rarr; <a href="#form_n6" id="n6" class="loadExample">load this network!</a></b></li>
<li>Figure 4 of Koblmüller, S., Duftner, N., Sefc, K. M., Aibara, M., Stipacek, M., Blanc, M., Egger B., Sturmbauer, C. (2007). <a href="https://bmcecolevol.biomedcentral.com/articles/10.1186/1471-2148-7-7/figures/4">Reticulate phylogeny of gastropod-shell-breeding cichlids from Lake Tanganyika – the result of repeated introgressive hybridization</a>. <i>BMC Evolutionary Biology</i> 7(7) <b>&rarr; <a href="#form_n32" id="n32" class="loadExample">load this network!</a></b></li>
<li>Figure 5 of Westenberger, S. J., Barnabé, C., Campbell, D. A. &amp; Sturm, N. R. (2005). <a href="http://dx.doi.org/10.1534/genetics.104.038745">Two Hybridization Events Define the Population Structure of <i>Trypanosoma cruzi</i></a>. <i>Genetics</i> 171(2):527-543 <b>&rarr; <a href="#form_n12" id="n12" class="loadExample">load this network!</a></b></li>
<li>Figure 4 of Ge, S., To, S. &amp; Lu, B. R. (1999). <a href="http://dx.doi.org/10.1073/pnas.96.25.14400">Phylogeny of rice genomes with emphasis on origins of allotetraploid species</a>. <i>PNAS</i> 96(25):14400-14405 <b>&rarr; <a href="#form_n13" id="n13" class="loadExample">load this network!</a></b></li>
<li>Figure 56 of Grant, V. (1971). <a href="http://www.amazon.com/Plant-Speciation-Verne-Grant/dp/0231083262"><i>Plant Speciation</i></a>,<i></i> Columbia University Press <b>&rarr; <a href="#form_n9" id="n9" class="loadExample">load this network!</a></b></li>
<li>Figure 14.1 of Alston, R. E. &amp; Turner, B. L. (1963). <a href="http://www.biodiversitylibrary.org/item/26577#page/291/mode/1up"><i>Biochemical systematics</i></a>,<i></i> Englewood Cliffs, N.J., Prentice-Hall <b>&rarr; <a href="#form_n20" id="n20" class="loadExample">load this network!</a></b></li>
<li>Figure 5 of Grant, V. (1953). <a href="http://dx.doi.org/10.2307/2405571">The Role of Hybridization in the Evolution of the Leafty-Stemmed Gilias</a>, <i>Brittonia</i> 5(4):337-367 <b>&rarr; <a href="#form_n22" id="n22" class="loadExample">load this network!</a></b></li>
<li>Figure 96 of Taylor, H. (1945). <a href="http://www.jstor.org/stable/2804889">Cyto-Taxonomy and Phylogeny of the Oleaceae</a>, <i>Evolution</i> 7(1):51-64 <b>&rarr; <a href="#form_n23" id="n23" class="loadExample">load this network!</a></b></li>
</ul>
</p>

<p>
The figures extracted from the article cited above are available below: click directly on them to load the corresponding network in the form above!<br/>
<a href="" class="imageExample" id="network1"></a>
<a href="" class="imageExample" id="network2"></a>
<a href="" class="imageExample" id="network3"></a>
<a href="" class="imageExample" id="network4"></a>
<a href="" class="imageExample" id="network5"></a>
<a href="" class="imageExample" id="network6"></a>
<a href="" class="imageExample" id="network7"></a>
<a href="" class="imageExample" id="network8"></a>
<a href="" class="imageExample" id="network9"></a>
<a href="" class="imageExample" id="network10"></a>
<a href="" class="imageExample" id="network11"></a>
<a href="" class="imageExample" id="network12"></a>
<a href="" class="imageExample" id="network13"></a>
<a href="" class="imageExample" id="network14"></a>
<a href="" class="imageExample" id="network15"></a>
<a href="" class="imageExample" id="network16"></a>
<a href="" class="imageExample" id="network17"></a>
<a href="" class="imageExample" id="network18"></a>
<a href="" class="imageExample" id="network19"></a>
<a href="" class="imageExample" id="network20"></a>
<a href="" class="imageExample" id="network21"></a>
<a href="" class="imageExample" id="network22"></a>
<a href="" class="imageExample" id="network23"></a>
<a href="" class="imageExample" id="network24"></a>
<a href="" class="imageExample" id="network25"></a>
<a href="" class="imageExample" id="network26"></a>
<a href="" class="imageExample" id="network27"></a>
<a href="" class="imageExample" id="network28"></a>
<a href="" class="imageExample" id="network29"></a>
<a href="" class="imageExample" id="network30"></a>
<a href="" class="imageExample" id="network31"></a>
<a href="" class="imageExample" id="network32"></a>
<a href="" class="imageExample" id="network33"></a>
<a href="" class="imageExample" id="network34"></a>
<a href="" class="imageExample" id="network35"></a>
<a href="" class="imageExample" id="network36"></a>
<a href="" class="imageExample" id="network37"></a>
</p>
<hr/>

<?php 
include("footer2.php");

?>


</body></html>