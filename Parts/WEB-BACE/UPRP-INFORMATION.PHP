<div class="Container" style="background-image: url(https://upload.wikimedia.org/wikipedia/en/thumb/d/dd/UPR_at_Ponce_Seal.svg/220px-UPR_at_Ponce_Seal.svg.png);
background-size: 60% 95%; background-repeat: no-repeat; background-position: 90%; ">
            <div class="Title">
              <a>UPR Ponce</a>
            </div>
            <!-- Info -->
            <div class="Info">
              <button type="button" class="BTN" ID="BTN1" data-toggle="collapse" data-target="#DATA"> <a>Mission and vision</a></button>
                        <?php
                                if ($loggedUser->roll=='admin') {
                        ?>
                                <input class="INPUT" type="file" accept=".PDF" id="myFile"><button class="BTN" onclick="myFunction()">Try it</button>
                        <?php
                                }
                        ?>
            </div>
                <div id="DATA" class="collapse">
                <embed src="Components/PDF/UAMystic3.pdf" type="application/pdf" width="100%" height="500px" />
                </div><!-- Info -->
            <div class="Info">
              <a><button type="button" class="BTN" ID="BTN1" data-toggle="collapse" data-target="#DATA2">Program Goals</button></a>
              
            </div>
                <div id="DATA2" class="collapse">
                <embed src="Components/PDF/UAMystic3.pdf" type="application/pdf" width="100%" height="500px" />
                </div><!-- Info -->
            <div class="Info">
              <a><button type="button" class="BTN" ID="BTN1" data-toggle="collapse" data-target="#DATA3">Students Profile</button></a>
            </div>
                <div id="DATA3" class="collapse">
                <embed src="Components/PDF/UAMystic3.pdf" type="application/pdf" width="100%" height="500px" />
                </div><!-- Info -->
            <div class="Info">
              <a><button type="button" class="BTN" ID="BTN1" data-toggle="collapse" data-target="#DATA4">Strategic Plan</button></a>
            </div>
                <div id="DATA4" class="collapse">
                <embed src="Components/PDF/UAMystic3.pdf" type="application/pdf" width="100%" height="500px" />
                </div><!-- Info -->
            <div class="Info">
              <a href="http://www.uprp.edu/"><button type="button" ID="BTN1" class="BTN" >Website</button></a>
            </div>
            
            <div class="Info">
              <a><button type="button" class="BTN" ID="BTN1" onclick="<?php BAPREPORT::UpLoadData("null,'2','2016','2017','2','78','L-03','30','prueba con botton','el canoso','2019-08-19'");?>">Strategic Plan</button></a>
            </div>
               
        </div><!-- Col -->
<script>
        function myFunction() {
          var x = document.getElementById("myFile");
          x.disabled = true;
        }
</script>     