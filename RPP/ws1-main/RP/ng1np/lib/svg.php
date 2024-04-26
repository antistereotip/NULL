<svg width="220px" height="200px" viewBox="0 0 200 200">

<path d="M50,125 C 100,25 150,225, 200, 125"
        style="fill: none; stroke: lightblue;"/>

<path d="M-3,-3 L10,-13 L0,-25z" style="fill: none; stroke: lightblue;" >
    <animateMotion
        path="M50,125 C 100,25 150,225, 200, 125"
               rotate="auto"
        dur="3s" fill="freeze"/>
</path>
<path id="cubicCurve" d="M50,125 C 100,25 150,225, 200, 125"
        style="fill: none; stroke: blue;"/>

<path d="M-10,-3 L10,-3 L0,-25z" style="fill: none; stroke: lightblue;" >
    <animateMotion dur="6s" rotate="auto" fill="freeze">
        <mpath xlink:href="#cubicCurve"/>
    </animateMotion>
</path>
<!-- show the path along which the triangle will move -->
<path d="M50,125 C 100,25 150,225, 200, 125"
        style="fill: none; stroke: blue;"/>


</svg>
<rect x="-10" y="-10" width="20" height="20"
    style=" stroke: blue;">
    <animateTransform attributeName="transform" attributeType="XML"
        type="scale" from="1" to="4 2"
        additive="sum" begin="0s" dur="4s" fill="freeze"/>
    <animateTransform attributeName="transform" attributeType="XML"
        type="rotate" from="0" to="45"
        additive="sum" begin="0s" dur="4s" fill="freeze"/>
</rect>
<circle cx="60" cy="60" r="30" style="fill: #ff9; stroke: gray;">
    <animate id="c1" attributeName="r" attributeType="XML"
        begin="0s" dur="4s" from="30" to="0" fill="freeze"/>
</circle>
<text text-anchor="middle" x="60" y="60" style="visibility: hidden;">
    <set attributeName="visibility" attributeType="CSS"
        to="visible" begin="4.5s" dur="1s" fill="freeze"/>  
    nestade!
</text><!-- show the path along which the triangle will move -->
<path d="M50,125 C 100,25 150,225, 200, 125"
        style="fill: none; stroke: blue;"/>

<!-- Triangle to be moved along the motion path.
   It is defined with an upright orientation with the base of
   the triangle centered horizontally just above the origin. -->
<path d="M-10,-3 L10,-3 L0,-25z" style="fill: yellow; stroke: red;" >
    <animateMotion
        path="M50,125 C 100,25 150,225, 200, 125"
               rotate="auto"
        dur="6s" fill="freeze"/>
</path>
</svg>

<svg version="1.1"
  width="220" height="220"
  xmlns="">
  <defs>
    <radialGradient id="circleGrad">
      <stop offset="0%"   stop-color="#212121" />
      <stop offset="100%" stop-color="#014298" />
    </radialGradient>
  </defs>

  <ellipse fill="url(#circleGrad)" stroke="#000" cx="50%"
  cy="50%" rx="50%" ry="50%">
    <animate attributeName="rx" values="0%;50%;0%" dur="12s" 
      repeatCount="indefinite" />
    <animate attributeName="ry" values="0%;50%;0%" dur="12s" 
      repeatCount="indefinite" />
  </ellipse>

  
</svg>
<svg version="1.1"
  width="120" height="120"
  xmlns="">
  <defs>
    <radialGradient id="circleGrad">
      <stop offset="0%"   stop-color="#212121" />
      <stop offset="100%" stop-color="#014298" />
    </radialGradient>
  </defs>

  <ellipse fill="url(#circleGrad)" stroke="#000" cx="50%"
  cy="50%" rx="50%" ry="50%">
    <animate attributeName="rx" values="0%;50%;0%" dur="1s" 
      repeatCount="indefinite" />
    <animate attributeName="ry" values="0%;50%;0%" dur="1s" 
      repeatCount="indefinite" />
  </ellipse>

  
</svg>
<svg version="1.1"
  width="220" height="220"
  xmlns="">
  <defs>
 	<path id="textPath" 
	      d="M10 50 C110 0 90 110 90 150"/>
  </defs>
  <text style="font-weight: bold;  
               font-size: 2em; border: none;">
	<textPath xlink:href="#textPath">
		&reg; ng1np [ no &copy; ]
	</textPath>
  </text>
</svg>
