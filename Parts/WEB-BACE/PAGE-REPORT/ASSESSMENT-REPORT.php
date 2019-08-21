<div class="Container">
        <?php 
  $gun='no funciona';
  ?>
    <div class="Title">
        Assessment Report
    </div>
    
<div class="information">
    <form method="post" action="">
        <div class="rows">
            <div class="colum" ID="PARCIAL50">
                <div class="text" id="Academic">
                    <label for="Academic">Academic Year</label>
                    <input type="text" class="form-control" ID="PARCIAL30" ID name="Year" 
                           placeholder="Enter Academic year" value="">
                    <input type="text" class="form-control" ID="PARCIAL30" name="action">
                </div>
            </div>
            <div class="colum" ID="PARCIAL50">
                <div class="text" id="semester">
                    <label for="semester">Semester</label>
                    <div class="radio">
                    <label><input type="radio" name="semester" checked> 1st</label>
                    </div>
                    <div class="radio">
                    <label><input type="radio" name="semester">2nd</label>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="rows">
            <div class="colum" id="full">
               <div class="text" id="outcome">
                    <div class="custom-select" data-toggle="Select" data-target="#Selected" style="width:100%;">
                        <select style="width:100%;">
                          <option class="STN" ID="Selected" value="00">Selects Learning Outcome:</option>
                            <?php
                            $INFO = BAP::loadFromData();
                            $i=0;
                            foreach ($INFO->studentsLO as $rec=>$studentsLO){
                                  $SLO_INFORMATION=  $INFO->SLO[$i];
                                ?>  <div class="">
                                          <option style="width:100%" class="STN" ID="Selected" onselect="getvalue()" value="
                                          <?php echo $INFO->ID[$i]?>">
                                          <?php
                                           echo '<span style="color: black; font-weight: bold;"> ' . $studentsLO.': '.$SLO_INFORMATION . '</span>';
                                         ?></option>
                                    </div>
                                <?php $i++;
                            }
                            $INFO = BAP::loadFromBYMayor();
                            $i=0;
                            $centinela=' ';
                            foreach ($INFO->studentsLO as $rec=>$studentsLO){
                                     $CPC= $INFO->CPC[$i];
                                     $SLO_INFORMATION=  $INFO->SLO[$i]; 
                                     if ($centinela==$CPC ){
                                            
                                     }else{
                                           
                                            $centinela=$CPC;
                                            ?>
                                            <div class="SubInfo">
                                            <option  Style="text-align: center" class="STN" ID="Selected" value="00" disabled><?php echo $centinela?></option>
                                            </div>
                                    <?php
                                    }?><div class="">
                                        <option class="STN" ID="Selected" value="<?php echo $INFO->ID[$i]?>">
                                    <?php
                                         echo '<span style="color: black; font-weight: bold;"> ' . $studentsLO.': '.$SLO_INFORMATION . '</span>';
                                    ?></option>
                                        </div><?php $i++;
                            }?>
                        </select>
                      </div>
               </div> 
            </div>
        </div>
        <div class="rows">
            <div class="colum" id="full">
                <div class="text" id="components">
                    <label for="Components">Common Profesional Component (CPC)</label>
                    <div class="rows">
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Marketing">Marketing</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Finance">Finance</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Information Tecnologi">Information Tecnologi</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Business Law">Business Law</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Ethics">Ethics</label>
                        </div>
                    </div>
                    <div class="rows">
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Management">Management</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Accounting">Accounting</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Statistic">Statistic</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Global Management">Global Management</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Economics">Economics</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rows">
            <div class="colum" id="full">
                <div class="text" id="assessments">
                    <label for="assessments">Assessment instrument:</label>
                    <div class="rows">
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Test">Test</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Rubric">Rubric</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Employer Evaluation">Employer Evaluation</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Survey">Survey</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="">Other</label>
                                <input type="text" class="form-control" ID="PARCIAL30" name="action">
                        </div>
                    </div>
                    <div class="rows">
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Formative">Formative</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Sumative">Sumative</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="External">External</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Internal">Internal</label>
                        </div>
                        <div class="colum" ID="PARCIAL" >
                        <label><input type="checkbox" value="Comparative">Comparative</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rows">
            <div class="colum" ID="full" >
                <div class="text">
                    <label for="comment">performance measure:</label>
                    <textarea class="form-control" rows="5" id="performance"></textarea>  
                </div>
            </div>
            <div class="colum" ID="full" >
                <div class="text">
                    <label for="comment">result:</label>
                    <textarea class="form-control" rows="5" id="result"></textarea>      
                </div>
            </div>
        </div>
        <div class="rowBlock">
            <div class="BLOCKER" ID="PARCIAL50" >
                <div class="cursos" ID="full">
                    <label for="course">Course: </label>
                    <input type="text" class="form-control" ID="Input-Form" name="courses">
                </div>
                <div class="cursos" ID="full">
                    <label for="course">Section</label>
                    <input type="text" class="form-control" ID="Input-Form" name="Section">
                </div>
                <div class="cursos" ID="full">
                    <label for="number"># of students</label>
                    <input type="text" class="form-control" ID="Input-Form" name="number">
                </div>
            </div>
            <div class="BLOCKER" ID="PARCIAL50">
                <div class="text" id="full">
                        <div Class="Checkbox"><input type="checkbox" name="Direct" value="Direct"> Capstone</div>
                        <div Class="Checkbox"><input type="checkbox" name="Indirect" value="Indirect"> Major</div>
                </div>
                <div class="text" id="full">
                        <div Class="Checkbox"><input type="checkbox" name="Direct" value="Direct"> Core</div>
                        <div Class="Checkbox"><input type="checkbox" name="Indirect" value="Indirect"> Intership</div>
                </div>
                <div class="text" id="full">
                        <input id="PARCIAL10" type="checkbox" value="">Other</label>
                        <input type="text" class="form-control" ID="Input-Form" name="action">
                </div>
            </div>
        </div>
        <div class="rows">
            <div class="colum" ID="full" >
                <div class="text">
                    <label for="comment">Analysis and action taken :</label>
                    <textarea class="form-control" rows="5" id="performance"></textarea>  
                </div>
            </div>
        </div>
        <div class="rows">
            <div class="colum" ID="PARCIAL50" >
                <div class="text">
                    <label for="comment"> Submitted by</label>     <?php echo  $gun;?>
                    <input type="text" class="form-control" ID="Input-Form" > 
                </div>
            </div>
            <div class="colum" ID="PARCIAL50" >
                <div class="text">
                    <label for="comment">Date:</label>
                    <input type="text" class="form-control" ID="Input-Form">
                </div>
            </div>
        </div>
    </form>    
</div>

    
</div>
<script>
function getvalue() {
    <?php 
  $gun='funciona';
  ?>
}
</script>

<?PHP
if ($action == 'select'){
    
    
        ?>
        <div class="collapse" background-color:yellow><div>
        <?php
}
?>