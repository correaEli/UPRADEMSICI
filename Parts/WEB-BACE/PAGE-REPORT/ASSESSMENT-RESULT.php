<div class="Container">
    
    <div class="Title">
        Assessment Report
    </div>
<?php
$INFO = BAP::loadFromInfomation($search);
?>
<!--************************************* informacion completa ************************************************-->
        <div class="information">
            <div class="rows">
                <div class="colum" ID="full">
                    <div class="text" id="Learning">
                        <label>Learning Outcome : </label>
                        <?php echo $INFO->studentsLO .': '. $INFO->SLO?>
                    </div>
                </div>   
            </div>
            <div class="rows">
                <div class="colum" ID="PARCIAL50">
                    <div class="text" id="assesment">
                        <label>Assesment Instrument : </label>
                        <?php echo $INFO->intruments ?>
                    </div>
                </div>
                <div class="colum" ID="PARCIAL30">
                    <div class="text" id="curse">
                        <label>Course : </label>
                        <?php echo $INFO->curses1 .' / '. $INFO->curses2?>
                    </div>
                </div>
                <div class="colum" ID="PARCIAL">
                    <div class="text" id="Years">
                        <label>Years : </label>
                        <?php echo $INFO->year1 .' / '. $INFO->year2?>
                    </div>
                </div>
            </div>
            <div class="rows">
                <div class="colum" ID="PARCIAL25">
                    <div class="text" id="">
                        
                    </div>
                </div>
                <div class="colum" ID="PARCIAL25">
                    <div class="text" id="">
                        
                    </div>
                </div>
                <div class="colum" ID="PARCIAL25">
                    <div class="text" id="">
            
                    </div>
                </div>
            </div>
            <div class="rows">
                <div class="colum" ID="full">
                    <div class="text" id="Success">
                        <label>Success Indicator : </label>
                        <?php echo ' '.$INFO->Success ?>
                    </div>
                </div>
            </div>
            <div class="rows">
                <div class="colum" ID="full">
                    <div class="text" id="Notes">
                        <label>Notes : </label>
                        <?php    ?>
                    </div>
                </div>
            </div>
            <div class="rows">
                <div class="colum" ID="PARCIAL25">
                    <div class="text" id="results">
                        <label>Academic Year : </label>
                        <?php echo $INFO->year1 .' / '. $INFO->year2?>
                    </div>
                </div>
            </div>
        </div>   
</div>