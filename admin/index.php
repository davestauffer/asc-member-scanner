<?php
/**
 * Created by PhpStorm.
 * User: davestauffer
 * Date: 2/16/17
 * Time: 4:52 PM
 */
require "../config/config.php";

require_once SGROOT . '/class.base_page.php';
require_once SGROOT . '/class.search.php';
$body = NULL;
$results = [];
$page = new ArchStreet\BasePage();

if (isset($_POST['txtsearch']) && !empty($_POST['txtsearch'])) {

    $s = trim($_POST['txtsearch']);
    $search = new \ArchStreet\Search();
    $results = $search->SearchMember($s);

    //var_dump($results);
}


ob_start();
?>
<div class="col-md-7">
    <div class="search-page search-content-4">
        <div class="search-bar bordered">

            <form id="frmsearch" name="frmsearch" method="post" action="/" target="_self">
                <div class="input-group">
                    <input name="txtsearch" class="form-control" id="txtsearch" type="text" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn green-soft uppercase bold"   type="submit" >Search</button>
                        <button class="btn grey-steel uppercase bold" type="button">Reset</button>
                    </span> 
                </div>
            </form>
        </div>
        <div class="search-table table-responsive">
            <table class="table table-bordered table-striped table-condensed">
                <thead class="bg-blue">
                    <tr>
                        <th>
                            <a href="javascript:;">Picture</a>
                        </th>
                        <th>
                            <a href="javascript:;">Name</a>
                        </th>
                        <th>
                            <a href="javascript:;">Edit</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($results as $row) {
                        
                        $picName =  $row['MemberId'] . 'jpg';
                        $photo = file_exists(PHOTOS . '/' .$picName) ? $picName : 'noPhoto.jpg';
                        ?>

                        <tr>
                            <td class="table-picture">
                                <a href="javascript:;">
                                    <img src="photos/<?php echo $photo; ?>">
                                </a>
                            </td>
                            <td class="table-name">
                                <h3>
                                    <a href="javascript:;"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></a>
                                </h3>
                                <p>Last Activity:

                                    <span class="font-grey-cascade">checked in</span>
                                </p>
                            </td>
                            <td class="table-edit"> 
                                <a class="btn blue btn-outline sbold uppercase"  href="/edit-member.php?id=<?php echo $row['id']; ?>">Edit</a>

                            </td>
                        </tr>
                        <?php
                    }
                    if (count($results) == 0) {
                        ?>
                        <tr>
                            <td colspan="3">
                                <div class="alert alert-danger">
                                    <p>No Results</p>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <div class="search-pagination pagination-rounded">
            <ul class="pagination">
                <li class="page-active">
                    <a href="javascript:;"> 1 </a>
                </li>
                <li>
                    <a href="javascript:;"> 2 </a>
                </li>
                <li>
                    <a href="javascript:;"> 3 </a>
                </li>
                <li>
                    <a href="javascript:;"> 4 </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php
$body = ob_get_contents();
ob_end_clean();
$page->getPage($body);

