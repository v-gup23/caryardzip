<?php include('view/admin_header.php'); ?>
    <nav>
        <ul class="navbar">
            <li><a href="admin.php?action=show_add_form">Add a Vehicle</a></li>
            <li><a href="make.php?action=list_makes">Edit Makes</a></li>
            <li><a href="type.php?action=list_types">Edit Types</a></li>
            <li><a href="class.php?action=list_classes">Edit Classes</a></li>
        </ul>
    </nav>
    <section class="main">
        <form action="admin.php" method="get" class="options">
            <select name="make_id" id="make_id">
                <option value="all">View All Makes</option>
                <?php foreach ($makes as $make) : ?>
                    <option value="<?php echo $make['makeID']; ?>"><?php echo $make['makeName']; ?></option>
                <?php endforeach; ?>
            </select>
            <select name="type_id" id="type_id">
                <option value="all">View All Types</option>
                <?php foreach ($types as $type) : ?>
                    <option value="<?php echo $type['typeID']; ?>"><?php echo $type['typeName']; ?></option>
                <?php endforeach; ?>
            </select>
            <select name="class_id" id="class_id">
                <option value="all">View All Classes</option>
                <?php foreach ($classes as $class) : ?>
                    <option value="<?php echo $class['classID']; ?>"><?php echo $class['className']; ?></option>
                <?php endforeach; ?>
            </select>
            
            <div class="sort-order">
                <label for="sort_order">Sort By:</label>
                <label><input type="radio" name="sort_order" value="price_desc">Price</label>
                <label><input type="radio" name="sort_order" value="year_desc">Year</label>
                <button class="button" type="submit" value="submit">Submit</button>
            </div>
        </form>

        <section class="main table-container">
        <?php if (!empty($vehicles)) : ?>
            <table>
                <tr>
                    <th>Year</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Type</th>
                    <th>Class</th>
                    <th>Price</th>
                    <th>&nbsp;</th>
                </tr>

                <?php foreach ($vehicles as $vehicle) : ?>
                <tr>
                    <td><?php echo $vehicle['YEAR']; ?></td>
                    <td><?php echo get_make_name($vehicle['makeID']); ?></td>
                    <td><?php echo $vehicle['model']; ?></td>
                    <td><?php echo get_type_name($vehicle['typeID']); ?></td>
                    <td><?php echo get_class_name($vehicle['classID']); ?></td>
                    <td><?php echo $vehicle['price']; ?></td>

                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action" value="delete_vehicle">
                            <input type="hidden" name="vehicle_id" value="<?php echo $vehicle['vehicleID']; ?>">
                            <button class="remove-button" type="submit" value="Delete">Remove</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>    
        <?php else : ?>
            <p class="main">No Vehicles Exist Yet</p>
        <?php endif; ?>
        </section>
    </section>
    <?php include('view/footer.php'); ?>
    </div>
</main>
