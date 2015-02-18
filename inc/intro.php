
<!--Adobe Edge Runtime-->
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<script>
	var custHtmlRoot="edgeanimate_assets/weDesign/Assets/"; 
	var script = document.createElement('script'); 
	script.type= "text/javascript";
script.src = custHtmlRoot+"edge_includes/edge.5.0.1.min.js";
	var head = document.getElementsByTagName('head')[0], done=false;
	script.onload = script.onreadystatechange = function(){
		if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
			done=true;
			var opts ={
    scaleToFit: "both",
    centerStage: "both",
    minW: "320px",
    maxW: "undefined",
    width: "1200px",
    height: "600px"
};
			opts.htmlRoot =custHtmlRoot;
			AdobeEdge.loadComposition('weDesign', 'EDGE-3761144', opts,
			{"dom":{}}, {"style":{"${symbolSelector}":{"isStage":"true","rect":["undefined","undefined","1000px","600px"],"fill":["rgba(255,255,255,1)"]}},"dom":{}});		
			script.onload = script.onreadystatechange = null;
			head.removeChild(script);
		}
	};
	head.appendChild(script);
	</script>
<style>
        .edgeLoad-EDGE-3761144 { visibility:hidden; }
    </style>
<!--Adobe Edge Runtime End-->

<section class="intro">
<div class="intro-body">
    <div class="container">
      <div class="row">
       <div id="Stage" class="EDGE-3761144"></div>
      </div>
    </div>
  </div>
</section>