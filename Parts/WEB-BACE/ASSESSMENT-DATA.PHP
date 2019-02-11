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
                    <a href="ASSESSMENT-DATA.php?b=COLLAPSE"><button type="button2" class="BTN" >
                    Learning Outcomes (BAP) </button></a>
                </div>
        <div class="Collapse">
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
                    <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 2A:
                      <?php
                       $u = BAP::loadFromData('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 2B:
                      <?php
                       $u = BAP::loadFromData('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                   <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 3A:
                      <?php
                       $u = BAP::loadFromData('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                   <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 4A:
                      <?php
                       $u = BAP::loadFromData('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 4B:
                      <?php
                       $u = BAP::loadFromData('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 5A:
                      <?php
                       $u = BAP::loadFromData('1A');
                       echo $u->SLO;
                     ?>
                       </button></a>
                    </div>
            <!-- Info -->
                    <div class="Sub2Info">
                      <a href="index.php?b=1A"><button type="button" class="BTN2" > 6A:
                      <?php
                       $u = BAP::loadFromData('1A');
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
                <a><button type="button" class="BTN" >Learning OutComes by Mayor</button></a>
            </div>
            <!-- Info -->
        <div class="Collapse2">
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
