<?php $title="区域图"?>
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
            margin : [50,50,80] //画板的边距
          },
          title : {
            text : '区域图'
          },
          subTitle : {
            text : 'Source: WorldClimate.com'
          },
          invert : true,
          xAxis : {   //坐标轴更改位置和文本配置信息
            position : 'left', //x轴居左
            labels : {
              label : {
                'text-anchor' : 'end',
                x : -12,
                y : 0
              }
            }
          },
          yAxis : {
            position : 'bottom'
          },
          seriesOptions : { //设置多个序列共同的属性
            areaCfg : { //如果数据序列未指定类型，则默认为指定了xxCfg的类型，否则都默认是line
              markers : {
                single : true
              },
              pointStart: 1940,
              pointInterval: 1

            }
          },
          tooltip : {
            valueSuffix : '°C'
          },
          series : [{
              name: 'Africa',
              data: [106, 107, 111, 133, 221, 767, 1766,855]
          }, {
              name: 'Europe',
              data: [163, 203, 276, 408, 547, 729, 628,460]
          }]

        });

        chart.render();
      </script>
<?php include("../../templates/control-footer.php"); ?>
