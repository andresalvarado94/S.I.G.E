<style>
    .tarje{
  border-top-left-radius: 5%;
  border-top-right-radius: 5%;
  transition: all 0.2s ease-in;
  position: relative;
  overflow: hidden;
  /* box-shadow: -1px -1px 6px 0 rgb(122, 221, 102), 4px 4px 16px 2px rgb(92, 162, 235);
  */
/* background-color: red; */
box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
  /* */
}


.tarje::before {

  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0,2);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.tarje:hover::before {
opacity: .1;
}
.tarje:hover {
border-bottom-left-radius: 5%;
border-bottom-right-radius: 5%;

transform: scale(1.01);
-webkit-box-shadow: 10px 10px 12px -7px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 12px -7px rgba(0,0,0,0.75);
box-shadow: 10px 10px 12px -7px rgba(0,0,0,0.75); 
}


.tarje-img{
border-top-left-radius: 5.6%;
border-top-right-radius: 5.6%;

}

</style>
<br>
<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-check-to-slot fa-2xl"> </i> Paz y Salvo</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white"><?php echo "Cantidad"?></a>
                                        <div class="small text-white"><i class="fa-solid fa-check-to-slot"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-hand-holding-dollar fa-2xl"> </i> En mora</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white " ><?php echo "Cantidad"?></a>
                                        <div class="small text-white"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-sack-dollar fa-2xl"></i> Ingresos</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white" ><?php echo "+$$$"?></a>
                                        <div class="small text-white"><i class="fa-solid fa-sack-dollar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><i class="fa-solid fa-wallet fa-2xl"></i> Egresos</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white"><?php echo "-$$$"?></a>
                                        <div class="small text-white"><i class="fa-solid fa-wallet"></i></div>
                                    </div>
                                </div>
                            </div>
</div>
<br><hr>
<br>
