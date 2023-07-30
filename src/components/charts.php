<?php 
    $today="Actualizado: ".date("F j / Y"); 
    $person1="Estudiantes";
    $person2="Docentes";
    $person3="Acudientes";
    $status1="Activos";
    $status2="Inactivos";
    $status3="En proceso";
    ?>;
<div class="row">
                        <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        <?php echo $person1?> <?php echo $status1?> | <?php echo $today?>
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        <?php echo $person1?> <?php echo $status2?> | <?php echo $today?>
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        
                        