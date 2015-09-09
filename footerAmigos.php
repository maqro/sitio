<footer>
        <div class="container">
            <div class="row" style="background-color:#9A9493;padding:70px;">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div>
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div align="center">
                                            <h2 id="contacto">Formulario</h2><br>
                                        </div>
                                        
                                        <table style="color:white">
                                            <tr>
                                                <td>
                                                    <label for="inputNombre" class="control-label">Nombre del socio:*</label>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="inputNombre" placeholder="__________________________________________________________________">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="inputDomicilio" class="control-label">Domicilio para recibir correspondencia:*</label>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="inputDomicilio" placeholder="__________________________________________________________________">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="inputTelefonoPart" class="control-label">Telefono particular:*</label>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="inputTelefonoPart" placeholder="__________________________________________________________________">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="inputTelefonoEmp" class="control-label">Telefono de la Empresa:*</label>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="inputTelefonoEmp" placeholder="__________________________________________________________________">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="inputEmail" class="control-label">E-mail:*</label>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="inputEmail" placeholder="__________________________________________________________________">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="inputMembresia" class="control-label">Tipo de Membresia:</label>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" name="inputInfoDe">
                                                        <option>Individual -- $500</option>
                                                        <option>Asociado -- $1000</option>
                                                        <option>Colaborador -- $10,000</option>
                                                        <option>Benefactor -- $15,000</option>
                                                        <option>Gran Benefactor -- $25,000</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <button type="submit" name="contacto-amigos" class="btn btn-default">ENVIAR</button>
                                                    <button type="reset" class="btn btn-default">BORRAR</button>
                                                    <br/>* Son campos obligatorios para contactarnos con usted.
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </form>
                                <font color="white">
                                    Al enviar este formulario aceptas la políticas de reservacion y las políticas de privacidad.
                                    <a href="AvisoPrivacidad_MaQro.pdf">Ver políticas.</a>
                                </font>
                            </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="logoGob" align="center">
                <img src="media/logosGobierno2.png" />
            </div>                    
        </div>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="http://www.jscache.com/wejs?wtype=socialButtonRate&amp;uniq=998&amp;locationId=2315125&amp;color=white&amp;reviewCountRequested=true&amp;lang=es&amp;display_version=2"></script>
        <script>
            $(function(){

                $(document).on( 'scroll', function(){

                    if ($(window).scrollTop() > 1500) {
                        $('.scroll-top-wrapper').addClass('show');
                    } else {
                        $('.scroll-top-wrapper').removeClass('show');
                    }
                });

                $('.scroll-top-wrapper').on('click', scrollToTop);
            });

            function scrollToTop() {
                verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
                element = $('body');
                offset = element.offset();
                offsetTop = offset.top;
                $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
            }
        </script>
    </footer>
    <div class="container">
        <div class="registro">
            <font color="#2F2523">Museo de Arte de Queretaro. ® 2014.</font>
        </div>
    </div>
    <div class="scroll-top-wrapper ">
        <span class="scroll-top-inner">
            <i class="fa fa-3x fa fa-chevron-up"></i>
        </span>
    </div>