<?PHP
$action = (isset($_GET['b'])) ? $_GET['b'] : '';
?>

<div class="Container">
        <div class="Title">
              <a>Assessment Data</a>
        </div>
            <!-- Info -->
            <div class="Info">
              <a><button type="button" class="BTN" >Assessment plan</button></a>
            </div>
            <div class="Info">
              <a><button type="button" class="BTN" >Assessment Report</button></a>
            </div>
            <!-- Info -->
            

                <div class="SubInfo">
                    <a><button type="button" class="BTN" data-toggle="collapse" data-target="#DATA">Learning Outcomes (BAP)</button></a> 
                     
                </div>
        <div id="DATA" class="collapse">
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 1A:
                      <?php
                       $u = BAP::loadFromData('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?b=1B"><button type="button" class="BTN2" > 1B:
                      <?php
                       $u = BAP::loadFromData('1B');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?b=2A"><button type="button" class="BTN2" > 2A:
                      <?php
                       $u = BAP::loadFromData('2A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?b=2B"><button type="button" class="BTN2" > 2B:
                      <?php
                       $u = BAP::loadFromData('2B');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                   <div class="Sub2Info">
                      <a href="index.php?b=3A"><button type="button" class="BTN2" > 3A:
                      <?php
                       $u = BAP::loadFromData('3A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                   <div class="Sub2Info">
                      <a href="index.php?b=4A"><button type="button" class="BTN2" > 4A:
                      <?php
                       $u = BAP::loadFromData('4A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?b=4B"><button type="button" class="BTN2" > 4B:
                      <?php
                       $u = BAP::loadFromData('4B');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?b=5A"><button type="button" class="BTN2" > 5A:
                      <?php
                       $u = BAP::loadFromData('5A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?b=6A"><button type="button" class="BTN2" > 6A:
                      <?php
                       $u = BAP::loadFromData('A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
        </div>
                <div class="SubInfo">
                    <a><button type="button" class="BTN" >ALL Outcomes Survey</button></a>
                </div>
            <!-- Info -->
             <div class="SubInfo">
                <a><button type="button" class="BTN" data-toggle="collapse" data-target="#DATA2">Learning OutComes by Mayor</button></a>
            </div>
            <!-- Info -->
        
        <div id="DATA2" class="collapse">
                    <div class="SubInfo">
                        <a>Marketing</a>
                    </div>
            <!-- Info -->
                            <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 1A:
                      <?php
                       $u = BAP::loadFromData('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                            <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 1B:
                      <?php
                       $u = BAP::loadFromData('1A');
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
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 1A:
                      <?php
                       $u = BAP::loadFromData('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                           <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 1B:
                      <?php
                       $u = BAP::loadFromData('1A');
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
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 1A:
                      <?php
                       $u = BAP::loadFromData('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                            <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 1B:
                      <?php
                       $u = BAP::loadFromData('1A');
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
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 1A:
                      <?php
                       $u = BAP::loadFromData('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                            <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 1B:
                      <?php
                       $u = BAP::loadFromData('1A');
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
