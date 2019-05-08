<div class="Container">
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
            

                <div class="SubInfo">
                    <a><button type="button" class="BTN" ID="BTN1" data-toggle="collapse" data-target="#DATA">Learning Outcomes (BAP)</button></a> 
                     
                </div>
        <div id="DATA" class="collapse">
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=1A"><button type="button" class="BTN" ID="BTN2"> 1A:
                      <?php
                       $u = BAP::loadFromData('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=1B"><button type="button" class="BTN" ID="BTN2"> 1B:
                      <?php
                       $u = BAP::loadFromData('1B');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=2A"><button type="button" class="BTN" ID="BTN2"> 2A:
                      <?php
                       $u = BAP::loadFromData('2A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=2B"><button type="button" class="BTN" ID="BTN2"> 2B:
                      <?php
                       $u = BAP::loadFromData('2B');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                   <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=3A"><button type="button" class="BTN" ID="BTN2"> 3A:
                      <?php
                       $u = BAP::loadFromData('3A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                   <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=4A"><button type="button" class="BTN" ID="BTN2" > 4A:
                      <?php
                       $u = BAP::loadFromData('4A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=4B"><button type="button" class="BTN" ID="BTN2" > 4B:
                      <?php
                       $u = BAP::loadFromData('4B');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=5A"><button type="button" class="BTN" ID="BTN2" > 5A:
                      <?php
                       $u = BAP::loadFromData('5A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=6A"><button type="button" class="BTN" ID="BTN2" > 6A:
                      <?php
                       $u = BAP::loadFromData('6A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
        </div>
                <div class="SubInfo">
                    <a><button type="button" class="BTN" ID="BTN1" >ALL Outcomes Survey</button></a>
                </div>
            <!-- Info -->
             <div class="SubInfo">
                <a><button type="button" class="BTN" ID="BTN1" data-toggle="collapse" data-target="#DATA2">Learning OutComes by Mayor</button></a>
            </div>
            <!-- Info -->
        
        <div id="DATA2" class="collapse">
                    <div class="SubInfo">
                        <a>Marketing</a>
                    </div>
            <!-- Info -->
                            <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=1A&c=MARKETING"><button type="button" class="BTN" ID="BTN2" > 1A:
                      <?php
                       $u = BAP::loadFromMARKETING('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                            <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=1B&c=MARKETING"><button type="button" class="BTN" ID="BTN2" > 1B:
                      <?php
                        $u = BAP::loadFromMARKETING('1B');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="SubInfo">
                        <a>Accounting</a>
                    </div>
            <!-- Info -->
                            <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=1A&c=ACCOUNTING"><button type="button" class="BTN" ID="BTN2" > 1A:
                      <?php
                       $u = BAP::loadFromACCOUNTING('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                           <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=1B&c=ACCOUNTING"><button type="button" class="BTN" ID="BTN2" > 1B:
                      <?php
                       $u = BAP::loadFromACCOUNTING('1B');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="SubInfo">
                        <a>Management</a>
                    </div>
            <!-- Info -->
                            <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=1A&c=MANAGEMENT"><button type="button" class="BTN" ID="BTN2" > 1A:
                      <?php
                       $u = BAP::loadFromMANAGEMENTS('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                            <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=1B&c=MANAGEMENT"><button type="button" class="BTN" ID="BTN2" > 1B:
                      <?php
                       $u = BAP::loadFromMANAGEMENTS('1B');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="SubInfo">
                        <a>Finance</a>
                    </div>
            <!-- Info -->
                            <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=1A&c=FINACIE"><button type="button" class="BTN" ID="BTN2"> 1A:
                      <?php
                       $u = BAP::loadFromFINANCIE('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                            <div class="Sub2Info">
                      <a href="index.php?a=goRESULT&b=1B&c=FINANCIE"><button type="button" class="BTN" ID="BTN2" > 1B:
                      <?php
                       $u = BAP::loadFromFINANCIE('1B');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
        </div>
</div>

<?PHP
if ($action == 'COLLAPSE'){
        ?>
        <div class="Collapse" heigth:fit-content><div>
        <?php
}
?>
