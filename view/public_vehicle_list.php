<?php include('header.php'); ?>
    <section class="main">
        <form action="public.php" method="get" class="options">
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
    </section>

    <section id="list" class="main table-container">
    <?php if (!empty($vehicles)) : ?>
        <table>
            <tr>
                <th>Year</th>
                <th>Make</th>
                <th>Model</th>
                <th>Type</th>
                <th>Class</th>
                <th>Price</th>
            </tr>

            <?php foreach ($vehicles as $vehicle) : ?>
            <tr>
                <td><?php echo $vehicle['YEAR']; ?></td>
                <td><?php echo get_make_name($vehicle['makeID']); ?></td>
                <td><?php echo $vehicle['model']; ?></td>
                <td><?php echo get_type_name($vehicle['typeID']); ?></td>
                <td><?php echo get_class_name($vehicle['classID']); ?></td>
                <td><?php echo $vehicle['price']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>    
    <?php else : ?>
        <p class="main">No Vehicles Exist Yet</p>
    <?php endif; ?>
    </section> 
    <?php include('footer.php'); ?>
    </div>
</main>