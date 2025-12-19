<?php require APPROOT . '/views/inc/adminlte/header.php';  ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Genealogy Tree </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i> Level</a>
        </li>
        <li class="active">Here</li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div id="chart_div"> </div>
        </div>
    </div>

</section>
<!-- /.content -->

<?php require APPROOT . '/views/inc/adminlte/mainfooter.php';?>

<?php require APPROOT . '/views/inc/adminlte/script.php';?>
<script type="text/javascript" src="<?php echo URLROOT; ?>/public/js/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        packages: ["orgchart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');
        <?=$data['data']?>

        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        chart.draw(data, {
            allowHtml: true
        });
    }
</script>
<script>
    $(document).ready(function () {
        $('#btree').addClass('active');
    });
</script>

</body>

</html>