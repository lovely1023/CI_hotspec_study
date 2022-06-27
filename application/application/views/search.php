<section class="search-for-page">

        <div class="container">

            <div class="search-header">

                <h1>Search Results For <span class="tc-orange_red">"<?php echo $_REQUEST['search']; ?>"</span> </h1>

            </div>

        </div>

    </section>



    <section class="search-for-page-content">

        <div class="container">

            <div class="search-for-page-main-content">

			<?php

			

			$flag=0;

			

			foreach($blogs as $blog)

			{

			?>

                <div class="serach-for-inner-pages-content">

                    <a href="<?php echo BASE_URL ?>blogdetail/<?php echo $blog->id; ?>" class="return-main-page"><?php echo $blog->title; ?> | <?php echo $blog->author; ?></a>

                    <p class="teturn-page"> <span>Blog </span> </p>

                    <p class="teturn-page-content"><?php echo $blog->short_description; ?></p>

                </div>

		    <?php

			$flag=1;

			}

			?>	



         <?php

			

			foreach($services as $service)

			{

			?>

                <div class="serach-for-inner-pages-content">

                    <a href="<?php echo BASE_URL ?>services/detail/<?php echo $service->url; ?>" class="return-main-page"><?php echo $service->name; ?> </a>

                    <p class="teturn-page"> <span>Service </span> </p>

                    <p class="teturn-page-content"><?php echo $service->short_descpription; ?></p>

                </div>

		    <?php

			$flag=1;

			}

			?>	



             <?php

			

			foreach($newss as $news)

			{

			?>

                <div class="serach-for-inner-pages-content">

                    <a href="<?php echo BASE_URL ?>newsdetail/<?php echo $news->id; ?>" class="return-main-page"><?php echo $news->title; ?></a>

                    <p class="teturn-page"> <span>News </span></p>

                    <p class="teturn-page-content"><?php echo $news->short_description; ?></p>

                </div>

		    <?php

			$flag=1;

			}

			?>		



			<?php

			

			foreach($careers as $career)

			{

			?>

                <div class="serach-for-inner-pages-content">

                    <a href="<?php echo BASE_URL; ?>apply-now?id=<?php echo $career->id;  ?>" class="return-main-page"><?php echo $career->title; ?></a>

                    <p class="teturn-page"> <span>Career </span></p>

                    <p class="teturn-page-content"><?php echo $career->short_description; ?></p>

                </div>

		    <?php

			$flag=1;

			}

			?>		

			

			<?php

			

			foreach($programs as $program)

			{

			?>

                <div class="serach-for-inner-pages-content">

                    <a href="<?php echo BASE_URL ?>programme/detail/<?php echo $program->id; ?>" class="return-main-page"><?php echo $program->title; ?></a>

                    <p class="teturn-page"> <span>Program </span> </p>

                    <p class="teturn-page-content"><?php echo $program->short_description; ?></p>

                </div>

		    <?php

			$flag=1;

			}

			?>	



            <?php 

			

			if($flag==0)

			{

			?>		

			 <div class="serach-for-inner-pages-content">

			    <p class="teturn-page-content">Not Found</p>

			 </div>



            <?php

			

			}

			?>			

                



                <div class="page-box" style="display:none;">

                    <ul class="pagination">

                        <li class="page-item">

                            <a class="page-link" href="#" tabindex="-1">

                                <i class="fa fa-angle-double-left"></i> Prev

                            </a>

                        </li>

                        <li class="page-item">

                            <a class="page-link" href="#">1</a>

                        </li>

                        <li class="page-item">

                            <a class="page-link active" href="#">2</a>

                        </li>

                        <li class="page-item">

                            <a class="page-link" href="#">3</a>

                        </li>

                        <li class="page-item">

                            <a class="page-link" href="#">4</a>

                        </li>

                        <li class="page-item">

                            <a class="page-link" href="#">5</a>

                        </li>

                        <li class="page-item">

                            <a class="page-link" href="#">

                                Next <i class="fa fa-angle-double-right"></i>

                            </a>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </section>