<div class="Container">
    
    <div class="Title">
        <h4>Assessment Report</h4>
    </div>
<?php
$INFO = BAP::loadFromInfomation($search);
$INFO2= BAPREPORT::loadFromDATA($search);
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
                <div class="colum" ID="PARCIAL33">
                    <div class="text" id="curse">
                        <label>Course : </label>
                        <?php echo $INFO->curses1 .' / '. $INFO->curses2?>
                    </div>
                </div>
                <div class="colum" ID="PARCIAL15">
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
        <div class="Title">
            <h4>Assessment Results</h4>
        </div>
            <div class="rows">
                <?PHP
                $i=0;
                try {
                IF (is_object($INFO2)==true){
                    
                foreach ($INFO2->ID as $rec=>$ID){ ?>
                
                <div class="colum" ID="PARCIAL25">
                    <div class="text" id="results">
                        <label>Academic Year : </label>
                        <?php echo $INFO2->Ayear[$i] .' / '. $INFO2->Byear[$i]?>
                        <?php if ($INFO2->Semester[$i]==1){?>
                        <div class="Colum"  ID="PARCIAL50">
                        <div Class="Checkbox"><input  type="checkbox" name="Semester" value="1st Sem" checked> 1st</div>
                        <div class="text" ID="align"> <?php echo ' '.$INFO2->Result[$i] ?> </div>
                        </div>
                        <?php } else { ?>
                        <div class="Colum"  ID="PARCIAL50">
                        <div Class="Checkbox"><input  type="checkbox" name="Semester" value="1st Sem" > 1st</div>
                        <div class="text" ID="align"> <?php echo '___' ?> </div>
                        </div>
                        <?php } if ($INFO2->Semester[$i]==2){ ?>
                        <div class="Colum"  ID="PARCIAL50">
                        <div Class="Checkbox"><input  type="checkbox" name="Semester" value="2nd Sem" checked> 2nd</div>
                        <div class="text" ID="align"> <?php echo ' '.$INFO2->Result[$i] ?> </div>
                        </div>
                        <?php } else { ?>
                        <div class="Colum"  ID="PARCIAL50">
                        <div Class="Checkbox"><input  type="checkbox" name="Semester" value="2nd Sem" > 2nd</div>
                        <div class="text" ID="align"> <?php echo '___' ?> </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php $i++; }}else { Echo 'Report not available';}
                }catch(Exception $e){
                 
                }
                ?>
            </div>
    <?php IF (is_object($INFO2)==true){ ?>
        <div class="Title">
            <h4>Assessment Chart</h4>
        </div>
            <div class="rows">
                <div class="colum" ID="full">
                    <div class="CHARTcontainer" ID="CHARTcontainer" style="height: 500px;">
                    <Script>
                        anychart.onDocumentReady(function() {
                        
                            // set the data
                            var data = {
                                header: ["YEAR", "Percent"],
                              rows: [
                            <?php
                                $S=0;
                                $i=$i-2;
                                foreach ($INFO2->ID as $rec=>$ID){
                                    while($S<=$i){?>
                                        [" <?php echo $INFO2->Ayear[$S] .' / '. $INFO2->Byear[$S].' - '. $INFO2->Semester[$S]?>",  <?php echo $INFO2->Result[$S] ?>],
                                    <?php $S++;}}?>
                                [" <?php echo $INFO2->Ayear[$S] .' / '. $INFO2->Byear[$S].' - '. $INFO2->Semester[$S]?>",  <?php echo $INFO2->Result[$S] ?>]
                            ]};
                        
                            // create the chart
                           var chart = anychart.column();
                        
                            // add data
                            chart.data(data);
                        
                            // set the chart title
                            //chart.title("The deadliest earthquakes in the XXth century");

                          // draw
                          chart.container("CHARTcontainer");
                          chart.draw();
                        });
                    </Script></div>
                </div>
            </div>
            <?php } ?>
        </div>   
</div>