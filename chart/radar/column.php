<?php $title="折线图"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">
      <div id="canvas">

      </div>
    </div>

    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
    

        var chart = new AChart({
          id : 'canvas',
          <?php print getTheme()."\n"?>
          width : 950,
          height : 500,
          plotCfg : {
            margin : [50,50,100]

          },
          title : {
            text : '柱状雷达图',
            'font-size' : '16px'
          },
          subTitle : {
            text : 'Source: WorldClimate.com'
          },
          xAxis : {
            type : 'circle',
            tickInterval : 45
          },
          yAxis : {
            title : null,
            type : 'radius',
            grid : {
              type : 'polygon' //圆形栅格，可以改成circle
            },
            labels : {
              label : {
                x : -12
              }
            },
            min : 0
          },
          tooltip : {
            shared : true //共享栅格
          },
          series: [
            {
                name : 'column',
                type: 'column',
                data: [8, 7, 6, 5, 4, 6, 2, 7]
            }
            ]
        });

        chart.render();
      </script>
<?php include("../../templates/control-footer.php"); ?>
