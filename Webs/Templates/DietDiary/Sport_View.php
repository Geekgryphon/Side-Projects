<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tab button.active {
            background-color: #ccc;
        }
    </style>
</head>
<body>

    <div class="tab">
        <button class="SportTablinks" onclick="openTab(event, 'Chest')">胸</button>
        <button class="SportTablinks" onclick="openTab(event, 'Back')">背</button>
        <button class="SportTablinks" onclick="openTab(event, 'Leg')">腿</button>
        <button class="SportTablinks" onclick="openTab(event, 'Shoulder')">肩</button>
        <button class="SportTablinks" onclick="openTab(event, 'Arm')">手</button>
    </div>

    <div id="Chest" class="SportTabs">
        <h3>胸</h3>
        <div class="ChestVideo1">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/2yuv431SthQ" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen></iframe>
        </div>
    </div>
    <div id="Back" class="SportTabs">
        <h3>背</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/zgfcOWuTeYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div id="Leg" class="SportTabs">
        <h3>腿</h3>
        <div class="LegVideo1">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LWdhO_OMrHk" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen></iframe>
        </div>

        深蹲

        <iframe width="560" height="315" src="https://www.youtube.com/embed/xEp7xdftYTY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/JLG9X2Bcf_o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div id="Shoulder" class="SportTabs">
        <h3>肩</h3>
    </div>
    <div id="Arm" class="SportTabs">
        <h3>手</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/cxFPw0fu_KA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/bvINsj0gjOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    
    其他知識補充

    <iframe width="560" height="315" src="https://www.youtube.com/embed/qGf1-usZ0Fk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/TbY_5mOBZlU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/MzLZXUnekuI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/lBa6Ysa07x8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <script>
        document.getElementById("Chest").click();

        SportTab = document.getElementsByClassName("SportTabs");

        //先將所有版面隱藏
        for (i = 0; i < SportTab.length; i++) {
            SportTab[i].style.display = "none";
        }

        function openTab(evt, ShowTabName) {
           // var SportTab, ShowTabName;
            SportTab = document.getElementsByClassName("SportTabs");

            //先將所有版面隱藏
            for (i = 0; i < SportTab.length; i++) {
                SportTab[i].style.display = "none";
            }
            
            SportTablinks = document.getElementsByClassName("SportTablinks");
            for (i = 0; i < ShowTabName.length; i++) {
                SportTablinks[i].className = SportTablinks[i].className.replace(" active", "");
            }

            console.log(ShowTabName);
            
            document.getElementById(ShowTabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
</body>
</html>