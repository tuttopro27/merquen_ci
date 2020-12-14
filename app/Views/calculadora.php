<div class="content-wrapper">
    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                </div><!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="<?php base_url() ?>home">Home</a></li>

                    </ol>

                </div><!-- /.col -->

            </div><!-- /.row -->

        </div><!-- /.container-fluid -->

    </div>
    <section class="content">

        <div class="container-fluid">

            <!-- Small boxes (Stat box) -->

            <div class="row">

                <div class="col-lg-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Calculadora</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" name='calc' value="" class="form-control form-control-lg">
                                    <input type="hidden" name='resultado' value="" class="form-control form-control-lg">
                                    <input type="hidden" name="operacion" value="" class="form-control form-cpntrol-lg">
                                    <br>
                                    <br>
                                    <input type="button" class="btn btn-primary btn-lg" value="7" onclick="calc7();" />
                                    <input type="button" class="btn btn-primary btn-lg" value="8" onclick="calc8();" />
                                    <input type="button" class="btn btn-primary btn-lg" value="9" onclick="calc9();" />
                                    <input type="button" class="btn btn-primary btn-lg" value="/" onclick="division();" />
                                    <input type="button" class="btn btn-primary btn-lg" value="&larr;" />
                                    <br>
                                    <br>
                                    <input type="button" class="btn btn-primary btn-lg" value="4" onclick="calc4();" />
                                    <input type="button" class="btn btn-primary btn-lg" value="5" onclick="calc5();" />
                                    <input type="button" class="btn btn-primary btn-lg" value="6" onclick="calc6();" />
                                    <input type="button" class="btn btn-primary btn-lg" value="*" onclick="multiplicacion();" />
                                    <br>
                                    <br>
                                    <input type="button" class="btn btn-primary btn-lg" value="1" onclick="calc1();" />
                                    <input type="button" class="btn btn-primary btn-lg" value="2" onclick="calc2();" />
                                    <input type="button" class="btn btn-primary btn-lg" value="3" onclick="calc3();" />
                                    <input type="button" class="btn btn-primary btn-lg" value="-" onclick="resta();" />
                                    <br>
                                    <br>

                                    <input type="button" class="btn btn-primary btn-lg"" value=" 0" onclick="calc0();" />
                                    <input type="reset" class="btn btn-primary btn-lg"" value=" c" />
                                    <input type="button" class="btn btn-primary btn-lg"" value=" ." />
                                    <input type="button" class="btn btn-primary btn-lg"" value=" +" onclick="suma();" />
                                    <input type="button" class="btn btn-primary btn-lg"" value="=" onclick=" igual();">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>

            <!-- /.row (main row) -->

        </div><!-- /.container-fluid -->

    </section>
</div>