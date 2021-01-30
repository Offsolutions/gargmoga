<?php
$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<div class="row small-spacing">
    <div class="col-lg-4">
        <div class="box-content">

            <h4>Team</h4>
            <?php
            if (isset($_GET["id"])) {
                $where = array(
                    "id" => $_GET["id"],
                );
                $row1 = $obj->selectData("team", $where);
            }
            ?>
            <form data-toggle="validator" role="form" action="action.php" method="post" enctype="multipart/form-data">



                <div class="form-group">
                    <label class="control-label mb-10 text-left">Name</label>
                    <input required type="text" class="form-control" name="name" value="<?php echo isset($row1["name"]) ? $row1["name"] : ""; ?>">
                </div>

                <div class="form-group">
                    <label class="control-label mb-10 text-left">Designation</label>
                    <input required type="text" class="form-control" name="post" value="<?php echo isset($row1["post"]) ? $row1["post"] : ""; ?>">
                </div>

                <div class="checkbox margin-bottom-20">
                    <input name="mon" <?php if (isset($row1["mon"])) {
                                echo ($row1["mon"] == 1) ? "checked" : "";
                            }
                            ?> type="checkbox" id="chk-1"><label for="chk-1">Monday</label>
                </div>

                <div class="checkbox margin-bottom-20">
                    <input name="tue" <?php if (isset($row1["tue"])) {
                                echo ($row1["tue"] == 1) ? "checked" : "";
                            }
                            ?> type="checkbox" id="chk-12"><label for="chk-12">Tuesday</label>
                </div>
                <div class="checkbox margin-bottom-20">
                    <input name="wed" <?php if (isset($row1["wed"])) {
                                echo ($row1["wed"] == 1) ? "checked" : "";
                            }
                            ?> type="checkbox" id="chk-13"><label for="chk-13">Wednesday</label>
                </div>
                <div class="checkbox margin-bottom-20">
                    <input name="thu" <?php if (isset($row1["thu"])) {
                                echo ($row1["thu"] == 1) ? "checked" : "";
                            }
                            ?> type="checkbox" id="chk-14"><label for="chk-14">Thursday</label>
                </div>
                <div class="checkbox margin-bottom-20">
                    <input name="fri" <?php if (isset($row1["fri"])) {
                                echo ($row1["fri"] == 1) ? "checked" : "";
                            }
                            ?> type="checkbox" id="chk-15"><label for="chk-15">Friday </label>
                </div>
                <div class="checkbox margin-bottom-20">
                    <input name="sat" <?php if (isset($row1["sat"])) {
                                echo ($row1["sat"] == 1) ? "checked" : "";
                            }
                            ?> type="checkbox" id="chk-16"><label for="chk-16">Saturday</label>
                </div>
                <div class="checkbox margin-bottom-20">
                    <input name="sun" <?php if (isset($row1["sun"])) {
                                echo ($row1["sun"] == 1) ? "checked" : "";
                            }
                            ?> type="checkbox" id="chk-17"><label for="chk-17">Sunday</label>
                </div>


                <div class="">
                    <div class="form-group mb-30">
                        <label class="control-label mb-10 text-left">Image</label>

                        <input type="file" id="input-file-now-custom-1" class="dropify" <?php if (isset($row1["img"])) { ?> data-default-file="../images/<?php echo isset($row1["img"]) ? $row1["img"] : ""; ?>" <?php } ?> name="img">
                        <span>270*300</span>
                    </div>
                </div>

                <?php if (isset($_GET["id"])) {
                ?>
                    <input type="hidden" name="id" value="<?php echo isset($row1["id"]) ? $row1["id"] : ""; ?>">
                <?php
                } ?>
                <?php if (isset($_GET["id"])) {
                    $act = "edit_team";
                } else {
                    $act = "add_team";
                } ?>
                <div style="margin-top: 10px;" class="box-content">
                    <h4 class="box-title">Description</h4>
                    <textarea name="team_desc" id="tinymce">
							<?php echo isset($row1["team_desc"]) ? $row1["team_desc"] : ""; ?>
					</textarea>
                </div>


                <div class="form-group">
                    <button type="submit" name="<?php echo $act; ?>" value="<?php echo $act; ?>" class="btn btn-primary btn-anim"><i class="icon-rocket"></i><span class="btn-text">Save</span></button>
                </div>
            </form>
        </div>
        <!-- /.box-content -->
    </div>

    <div class="col-lg-8">
        <div class="box-content">
            <h4 class="box-title">Team</h4>
            <table id="myTable1" class="table table-hover table-striped display  table-bordered  pb-30">
                <thead class="text text-dark">
                    <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $record = $obj->getData("team");
                    if ($record) {
                        $sr = 0;
                        foreach ($record as $row) {
                            $sr++;
                    ?>

                            <tr>
                                <td>
                                    <?php echo $row["name"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["post"]; ?>
                                </td>
                                <td><img width="50px" src="../images/<?php echo $row["img"]; ?>" alt="" srcset=""></td>
                                <td class="text-nowrap">

                                    <a href="team.php?id=<?php echo $row["id"]; ?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i style="font-size:20px;" class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a style="margin-left: 10px;" onclick="confirm(<?php echo $row['id']; ?>);" data-toggle="tooltip" data-original-title="Delete"> <i style="font-size:20px;" class="fa fa-trash text-danger"></i> </a>
                                </td>
                            </tr>

                    <?php

                        }
                    } else {
                        echo "<h2>Record not found</h2>";
                    } ?>
                </tbody>
            </table>
        </div>
        <!-- /.box-content -->
    </div>
    <!-- /.col-xs-12 -->
</div>


<script>
    function confirm(id) {
        var id = id;

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#fec107",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function() {
            window.location.href = "action.php?page=team.php&del_team=" + id;
        });
        return false;


    }
</script>

<?php require_once("footer.php"); ?>