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
                <div class="colum" ID="PARCIAL33">
                    <div class="text" id="SelectBox">
                        <?php if ($INFO->direct==1){ ?>
                        <div Class="Checkbox"><input type="checkbox" name="Direct" value="Direct" checked> Direct</div>
                        <?php } else { ?>
                        <div Class="Checkbox"><input type="checkbox" name="Direct" value="Direct"> Direct</div>
                        <?php } if ($INFO->indirec==1){ ?>
                        <div Class="Checkbox"><input type="checkbox" name="Indirect" value="Indirect" checked> Indirect</div>
                        <?php } else { ?>
                        <div Class="Checkbox"><input type="checkbox" name="Indirect" value="Indirect"> Indirect</div>
                        <?php } ?>
                    </div>
                </div>
                <div class="colum" ID="PARCIAL33">
                    <div class="text" id="SelectBox">
                        <?php if ($INFO->external==1){ ?>
                        <div Class="Checkbox"><input  type="checkbox" name="Direct" value="Direct" checked> External</div>
                        <?php } else { ?>
                        <div Class="Checkbox"><input  type="checkbox" name="Direct" value="Direct"> External</div>
                        <?php } if ($INFO->internal==1){ ?>
                        <div Class="Checkbox"><input  type="checkbox" name="Indirect" value="Indirect" checked> Internal</div>
                        <?php } else { ?>
                        <div Class="Checkbox"><input  type="checkbox" name="Indirect" value="Indirect"> Internal</div>
                        <?php } ?>
                    </div>
                </div>
                <div class="colum" ID="PARCIAL33">
                    <div class="text" id="SelectBox">
                        <div Class="Checkbox"><input type="checkbox" name="Direct" value="Direct"> Formative</div>
                        <div Class="Checkbox"><input type="checkbox" name="Indirect" value="Indirect"> Summative</div>
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
                <?php $i=0; while($i <5){?>
                <div class="colum" ID="PARCIAL25">
                    <div class="text" id="results">
                        <label>Academic Year : </label>
                        <?php echo $INFO->year1 .' / '. $INFO->year2?>
                        <?php /*if (){ ?>
                        <div Class="Checkbox"><input  type="checkbox" name="Semester" value="1st Sem" checked> External</div>
                        <?php } else { ?>
                        <div Class="Checkbox"><input  type="checkbox" name="Semester" value="1st Sem"> External</div>
                        <?php } if (){ ?>
                        <div Class="Checkbox"><input  type="checkbox" name="Semester" value="2nd Sem" checked> Internal</div>
                        <?php } else { ?>
                        <div Class="Checkbox"><input  type="checkbox" name="Indirect" value="2nd Sem"> Internal</div>
                        <?php } */?>
                    </div>
                </div>
                <?php $i++;}?>
            </div>
        </div>   
</div>