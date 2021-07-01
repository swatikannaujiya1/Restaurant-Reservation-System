<?php
include"Includes/templates/navbar.php";
include"Includes/templates/header.php";
include"connect.php";
?>
<section class="our_menus" id="menus">
		<div class="container">
			<h2 style="text-align: center;margin-bottom: 30px">DISCOVER OUR MENUS</h2>
			<div class="menus_tabs">
				<div class="menus_tabs_picker">
					<ul style="text-align: center;margin-bottom: 70px">
						<?php

	                        $stmt = $con->prepare("Select * from menu_categories");
	                        $stmt->execute();
	                        $rows = $stmt->fetchAll();
	                        $count = $stmt->rowCount();

	                        $x = 0;

	                        foreach($rows as $row)
	                        {
	                        	if($x == 0)
	                        	{
	                        		echo "<li class = 'menu_category_name tab_category_links active_category' onclick=showCategoryMenus(event,'".str_replace(' ', '', $row['category_name'])."')>";
	                        			echo $row['category_name'];
	                        		echo "</li>";

	                        	}
	                        	else
	                        	{
	                        		echo "<li class = 'menu_category_name tab_category_links' onclick=showCategoryMenus(event,'".str_replace(' ', '', $row['category_name'])."')>";
	                        			echo $row['category_name'];
	                        		echo "</li>";
	                        	}

	                        	$x++;
	                     		
	                        }
						?>
					</ul>
				</div>

				<div class="menus_tab">
					<?php
                
                        $stmt = $con->prepare("Select * from menu_categories");
                        $stmt->execute();
                        $rows = $stmt->fetchAll();
                        $count = $stmt->rowCount();

                        $i = 0;

                        foreach($rows as $row) 
                        {

                            if($i == 0)
                            {

                                echo '<div class="menu_item  tab_category_content" id="'.str_replace(' ', '', $row['category_name']).'" style=display:block>';

                                    $stmt_menus = $con->prepare("Select * from menus where category_id = ?");
                                    $stmt_menus->execute(array($row['category_id']));
                                    $rows_menus = $stmt_menus->fetchAll();

                                    if($stmt_menus->rowCount() == 0)
                                    {
                                        echo "<div style='margin:auto'>No Available Menus for this category!</div>";
                                    }

                                    echo "<div class='row'>";
	                                    foreach($rows_menus as $menu)
	                                    {
	                                        ?>

	                                            <div class="col-md-4 col-lg-3 menu-column">
	                                                <div class="thumbnail" style="cursor:pointer">
	                                                    <?php $source = "admin/Uploads/images/".$menu['menu_image']; ?>

	                                                    <div class="menu-image">
													        <div class="image-preview">
													            <div style="background-image: url('<?php echo $source; ?>');"></div>
													        </div>
													    </div>
														                                                    
	                                                    <div class="caption">
	                                                        <h5>
	                                                            <?php echo $menu['menu_name'];?>
	                                                        </h5>
	                                                        <p>
	                                                            <?php echo $menu['menu_description']; ?>
	                                                        </p>
	                                                        <span class="menu_price">
	                                                        	<?php echo "₹".$menu['menu_price']; ?>
	                                                        </span>
	                                                    </div>
	                                                </div>
	                                            </div>

	                                        <?php
	                                    }
	                                echo "</div>";

                                echo '</div>';

                            }

                            else
                            {

                                echo '<div class="menus_categories  tab_category_content" id="'.str_replace(' ', '', $row['category_name']).'">';

                                    $stmt_menus = $con->prepare("Select * from menus where category_id = ?");
                                    $stmt_menus->execute(array($row['category_id']));
                                    $rows_menus = $stmt_menus->fetchAll();

                                    if($stmt_menus->rowCount() == 0)
                                    {
                                        echo "<div class = 'no_menus_div'>No Available Menus for this category!</div>";
                                    }

                                    echo "<div class='row'>";
	                                    foreach($rows_menus as $menu)
	                                    {
	                                        ?>

	                                            <div class="col-md-4 col-lg-3 menu-column">
	                                                <div class="thumbnail" style="cursor:pointer">
	                                                	<?php $source = "admin/Uploads/images/".$menu['menu_image']; ?>
	                                                    <div class="menu-image">
													        <div class="image-preview">
													            <div style="background-image: url('<?php echo $source; ?>');"></div>
													        </div>
													    </div>
	                                                    <div class="caption">
	                                                        <h5>
	                                                            <?php echo $menu['menu_name'];?>
	                                                        </h5>
	                                                        <p>
	                                                            <?php echo $menu['menu_description']; ?>
	                                                        </p>
	                                                        <span class="menu_price">
	                                                        	<?php echo "₹".$menu['menu_price']; ?>
	                                                        </span>
	                                                    </div>
	                                                </div>
	                                            </div>

	                                        <?php
	                                    }
	                               	echo "</div>";

                                echo '</div>';

                            }

                            $i++;
                            
                        }
                    
                        echo "</div>";
                
                    ?>
				</div>
			</div>
		</div>
	</section>
<?php
include"Includes/templates/footer.php";
?>
