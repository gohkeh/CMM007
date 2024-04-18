

    <?php include('header.php'); ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb4.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>Add A New Recipe</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Form Area Start ##### -->
    <div class="contact-area section-padding-0-80">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Add Recipe</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <input type="text" class="form-control" id="recipeName" placeholder="Recipe Name">
                                </div>
                                <div class="col-12 col-lg-7">
                                    <input type="text" class="form-control" id="shortIntro" placeholder="Short into about the recipe">
                                </div>
                                <div class="col-12 col-md-3">
                                    <input type="number" class="form-control" id="prepTime" placeholder="Preparation time in hours">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="ingredients" placeholder="Ingredients (comma separated)">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="prepSteps" cols="30" rows="10" placeholder="Preparation Steps"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn delicious-btn mt-30 btn-4" type="submit">Add Recipe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Form Area End ##### -->

<?php include('footer.php'); ?>