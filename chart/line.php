<?php $page="chart"?>
<?php $title="折线图"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/api/index.html#!/api/BUI.Chart.Series.Line"?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '折线图' ,
          href : 'line/base.php',
          minHeight : 600
        },{
          text : '折线图click出现tips' ,
          href : 'line/base-click.php',
          minHeight : 600
        },{
          text : '曲线图' ,
          href : 'line/smooth.php',
          minHeight : 600
        },
        {
          text : '显示点值' ,
          href : 'line/label.php',
          minHeight : 600
        },
        {
          text : '自定义marker' ,
          href : 'line/marker.php',
          minHeight : 600
        },
        {
          text : '单个marker' ,
          href : 'line/share-marker.php',
          minHeight : 600
        },
        {
          text : '时间不连续的折线图' ,
          href : 'line/disperse.php',
          minHeight : 600
        },
        {
          text : 'y轴非均值折线图' ,
          href : 'line/disorder.php',
          minHeight : 600
        },
        {
          text : '多y轴曲线' ,
          href : 'line/multiple-y.php',
          minHeight : 600
        },
        {
          text : '更改数据格式' ,
          href : 'line/data.php',
          minHeight : 600
        },{
          text : '使用store' ,
          href : 'line/store.php',
          minHeight : 600
        },
        {
          text : '图例位置' ,
          href : 'line/legend.php',
          minHeight : 600
        },
        {
          text : '自定义tooltip' ,
          href : 'line/tooltip.php',
          minHeight : 600
        },
        {
          text : '自定义tooltip(现有Dom）' ,
          href : 'line/tooltip-id.php',
          minHeight : 600
        },
        {
          text : '固定tooltip' ,
          href : 'line/tooltip-fixed.php',
          minHeight : 600
        }

    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>