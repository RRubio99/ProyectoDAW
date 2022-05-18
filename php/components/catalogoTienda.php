<?php	

    function componentCatalogo($idProducto,$nombreProducto,$precioProducto,$imagenProducto,$descripcionProducto,$cantidadProducto){
        $element='
            <div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="'.$imagenProducto.'" alt="product-img">
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal'.$idProducto.'">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a>'.$nombreProducto.'</a></h4>
						<p class="price">$'.$precioProducto.'</p>
					</div>
				</div>
			</div>

            <!-- Modal -->
			<div class="modal product-modal fade" id="product-modal'.$idProducto.'">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="tf-ion-close"></i>
				</button>
				<div class="modal-dialog " role="document">
					<div class="modal-content">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-8 col-sm-6 col-xs-12">
									<div class="modal-image">
										<img class="img-responsive" src="'.$imagenProducto.'" alt="product-img" />
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="product-short-details">
										<h2 class="product-title">'.$nombreProducto.'</h2>
										<p class="product-price">$'.$precioProducto.'</p>
										<p class="product-short-description">
                                        '.$descripcionProducto.'
										</p>
                                        <br>
                                        <p class="product-short-description">
                                        Cantidad en almacén: '.$cantidadProducto.'
										</p>
										<form action="shop.php" method="post">
											<input type="hidden" name="product_id" value="'.$idProducto.'">';
											 
											echo $element;
											
											if(isset($_SESSION['id_usuario'])){

												

												if(isset($_SESSION['carrito'])){
													if(isset($_POST['add'])){

														$item_array_id = array_column($_SESSION['carrito'],"product_id");

														if(in_array($idProducto,$item_array_id)){

														echo '
															<div class="alert alert-warning alert-common" role="alert"><i class="tf-ion-alert-circled"></i>
																El producto ya está en el carrito
															</div>
														';
															
														}else{
															echo '<button type="submit" class="btn btn-main" name="add">Agrega al carrito</button>';
														}
													}else{
														echo '<button type="submit" class="btn btn-main" name="add">Agrega al carrito</button>';
													}
												}else{
													echo '<button type="submit" class="btn btn-main" name="add">Agrega al carrito</button>';
												}

											}else{

												echo '
													<div class="alert alert-warning alert-common" role="alert"><i class="tf-ion-alert-circled"></i>
														Inicie sesión para comprar.
													</div>
												';

											}

											
										
										$element2 = '
													</form>';
										echo $element2;
										
										if(isset($_SESSION['nombre_usuario'])){

											if($_SESSION['nombre_usuario'] == 'Administrador'){
												echo '
												<form method="post" action="editarProducto.php">
													<input type="hidden" name="edit_product_id" value="'.$idProducto.'">
													<button type=submit name="edit" class="btn btn-transparent">Editar</button>
												</form>
								
												';
											}
											
										  }

										$element3 = '
														</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- /.modal -->
										';
										echo $element3;

										
    }


	function elementoCarrito($idProducto,$nombreProducto,$precioProducto,$imagenProducto){
		$element = '
			<tr class="">
                <td class="">
                    <div class="product-info">
                        <img width="80" src="'.$imagenProducto.'" alt="" />
                    </div>
                </td>
				<td class="">'.$nombreProducto.'</td>
              	<td class="">$'.$precioProducto.'</td>
				<td class="">
					<div class="product-quantity">
						<div class="product-quantity-slider">
							<input class="form-control" type="text" value="1" name="product-quantity'.$idProducto.'">
						</div>
					</div>
				</td>
                <td class="">
					<form action="components/insertCarrito.php" method="post">
                    	<button class="btn btn-main btn-small" style="background-color: red" type="submit"
							name="borrar">Quitar</button>
						<input type="hidden" name="borrar_product_id" value="'.$idProducto.'">
					</form>
                </td>
            </tr>
		';
		echo $element;
	}

	function elementoCheckout($nombreProducto,$precioProducto,$imagenProducto,$cantidadProducto){
		$element = '
				<div class="media product-card">
					<a class="pull-left"	>
						<img class="media-object" src="'.$imagenProducto.'" alt="Image" />
					</a>
					<div class="media-body">
						<h4 class="media-heading">'.$nombreProducto.'</h4>
						<p class="price">'.$cantidadProducto.' x '.$precioProducto.'</p>
					</div>
				</div>
			<hr>
		';
		echo $element;

	}

	function elementoHistorial($historial,$usuario,$producto,$cantidad,$precio){
		$element = '
		<tr>
			<td>'.$historial.'</td>
			<td>'.$usuario.'</td>
			<td>'.$producto.'</td>
			<td>'.$cantidad.'</td>
			<td>'.$precio.'</td>
			<td><span class="label label-primary">En Proceso</span></td>
		</tr>	
		';
		echo $element;
	}

?>