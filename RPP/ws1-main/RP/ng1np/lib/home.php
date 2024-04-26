<svg width="240px" height="200px" viewBox="0 0 200 200">

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
