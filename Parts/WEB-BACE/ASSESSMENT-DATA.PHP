<div class="Container" style="background-image: url(https://upload.wikimedia.org/wikipedia/en/thumb/d/dd/UPR_at_Ponce_Seal.svg/220px-UPR_at_Ponce_Seal.svg.png);
background-size: 60% 95%; background-repeat: no-repeat; background-position: 90%; ">
        <div class="Title">
              <a>Assessment Data</a>
        </div>
            <!-- Info -->
            <div class="Info">
              <a><button type="button" class="BTN" ID="BTN1" >Assessment plan</button></a>
            </div>
            <div class="Info">
              <a href="index.php?a=goREPORT"><button type="button" class="BTN" ID="BTN1">Assessment Report</button></a>
            </div>
            <!-- Info -->
            

        <div class="Info">
            <a><button type="button" class="BTN" ID="BTN1" data-toggle="collapse" data-target="#DATA">Learning Outcomes (BAP)</button></a> 
             
        </div>
<!--************************************* inicio del data collapse 1 ************************************************-->
        <div id="DATA" class="collapse">
            <!-- Info -->
        <?php
        $INFO = BAP::loadFromData();
        $i=0;
        foreach ($INFO->studentsLO as $rec=>$studentsLO){
              $SLO_INFORMATION=  $INFO->SLO[$i]; 
              $IDS= $INFO->ID[$i];$i++;
            ?>  <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=<?php echo $IDS ?>"><button type="button" class="BTN" ID="BTN2">  
                      <?php
                       echo '<span style="color: black; font-weight: bold;"> ' . $studentsLO.': '.$SLO_INFORMATION . '</span>';
                     ?></button></a>
                </div>
            </p><?php
        }?>
        </div>
<!--************************************* final del data collapse 1 ************************************************-->
                <div class="Info">
                    <a><button type="button" class="BTN" ID="BTN1" >ALL Outcomes Survey</button></a>
                </div>
            <!-- Info -->
             <div class="Info">
                <a><button type="button" class="BTN" ID="BTN1" data-toggle="collapse" data-target="#DATA2">Learning OutComes by Mayor</button></a>
            </div>
<!--************************************* inicio del data collapse 2 ************************************************-->

        
        <div id="DATA2" class="collapse">
                 <?php
        $INFO = BAP::loadFromBYMayor();
        $i=0;
        $centinela=' ';
        foreach ($INFO->studentsLO as $rec=>$studentsLO){
                 $CPC= $INFO->CPC[$i];
                 $SLO_INFORMATION=  $INFO->SLO[$i]; 
                 if ($centinela==$CPC ){
                        $i++;
                 }else{
                        $i++;
                        $centinela=$CPC;
                        ?>
                        <div class="SubInfo">
                        <a><?php echo $centinela; ?></a>
                    </div>
                        <?php
                 }
                
            ?><div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=<?php echo $studentsLO ?>&c=<?php echo $centinela ?>"><button type="button" class="BTN" ID="BTN2">  
                      <?php
                       echo '<span style="color: black; font-weight: bold;"> ' . $studentsLO.': '.$SLO_INFORMATION . '</span>';
                     ?>
                       </button></a>
                    </div>
            </p><?php
          }
          
        ?>
        </div>
<!--************************************* final del data collapse 2 ************************************************--> 
</div>

<?PHP
if ($action == 'collapse'){
        ?>
        <div class="collapse" heigth:fit-content><div>
        <?php
}
?>
