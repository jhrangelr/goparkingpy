<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include 'bd/bd.php';
$bd=new bd();

if (isset($_POST['ingresaruser'])){
    echo 'usuario ingresado';
    $nombre=$_POST['nombre'];
    $documento=$_POST['document'];
    $genero=$_POST['genero'];
    $cargo=$_POST['cargo'];
    //echo 
    //exit;
    $sql="INSERT INTO empleado (nombre,documento,IDcargo,genero) VALUES ('".$nombre."', '".$documento."', '".$cargo."', '".$genero."')";
    $resultado=$bd->insertar($sql);
}
include 'lib/head.php';
?>
        <div class="content-template">
            <section>
                <article>
                    <div>
                        <img class="logo" src="../img/logo_login.png" />
                    </div>
                    
                    <div class="menu">
                        <ul>
                            <li>
                                <a>
                                    <div>
                                        <span>Bandeja Ticket</span>
                                        <i class="arrow right"></i> 
                                    </div>                                
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div>
                                        <span>Gestionar Usuarios</span>
                                        <i class="arrow right"></i> 
                                    </div>                                       
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div>
                                        <span>Cerrar Sesión</span>
                                        <i class="arrow right"></i> 
                                    </div>                                       
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="section-content diametro">
                    <h3>Editar Usuario</h3>

                    <form>
                        <div class="user-form">
                            <section>
                                <article>
                                    <div>
                                        <section>
                                            <article>
                                                <span>Nombre</span>
                                                <div>
                                                    <input name="nombre" type="text" class="form-control form-control-name" aria-describedby="sizing-addon1" required>
                                                </div>                                                
                                            </article>
                                        </section>
                                    </div> 

                                    <div>
                                        <section>
                                            <article>
                                                <span>Documento</span>
                                                <input name="document" type="text" class="form-control" aria-describedby="sizing-addon1" required>
                                            </article>
                                            <article>
                                                <span>Genero</span>

                                                <select name="genero" class="form-control">
                                                    <option value="masculino">Masculino</option>
                                                    <option value="femenino">Femenino</option>
                                                </select>
                                            </article>
                                        </section>
                                    </div>

                                    <div>
                                        <div><span>Cargo</span></div>
                                        
                                        <div class="form-check">
											<select name="cargo" class="form-control">
												<option value="1">Desarrollador</option>
												<option value="2">Analista</option>
											</select>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Facturación
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Contabilidad
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Recursos Humanos
                                            </label>
                                        </div>
                                    </div>
                                </article>

                                <div class="vertical-line"></div>

                                <article>
                                    <div>
                                        <section>
                                            <article>
                                                <span>Correo Electronico</span>
                                                <input name="email" type="email" class="form-control" aria-describedby="sizing-addon1" required>                                            
                                            </article>
                                            <article>
                                                <span>Usuario</span>
                                                <input name="usuario" type="text" class="form-control" aria-describedby="sizing-addon1" required>                                           
                                            </article>
                                        </section>
                                    </div>  

                                    <div>
                                        <section>
                                            <article>
                                                <span>Password</span>
                                                <input name="password" type="password" class="form-control" aria-describedby="sizing-addon1" required>                                             
                                            </article>
                                            <article>
                                                <span>Confirmar Password</span>
                                                <input name="confirm_password" type="password" class="form-control" aria-describedby="sizing-addon1" required>                                              
                                            </article>
                                        </section>
                                    </div>
                                 
                                    <div class="chek">
                                        <input name="admin" type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">¿Es un usuario administrador?</label>
                                    </div>  
                                </article>
                            </section>                            
                        </div>

                        <div class="new" >
                            <button class="btn-gris" type="submit">Cancelar</button>
                            <button class="btn-gris" type="submit" name="ingresaruser">Crear Usuario</button>
                        </div>
                    </form>                   
                </article>
            </section>
        </div>
<?php
include 'lib/footer.php';
?>