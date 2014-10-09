<?php $title="动态图"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">  
      <div id="canvas">
        
      </div>
    </div>
    
    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
        var now = new Date(),
          start = new Date(now.getFullYear(),now.getMonth(),now.getDate(),0,0,0),
          end = new Date(now.getFullYear(),now.getMonth(),now.getDate() + 1,0,0,0);
        var interval = 5 * 1000,//10秒钟
          ticks = []; 

        for(var i = 0;i <= 24;i++ ){
          ticks.push(new Date(now.getFullYear(),now.getMonth(),now.getDate(),i,0,0).getTime());
        }

        var chart = new AChart({
          id : 'canvas',
          width : 950,
          height : 500,
         
          title : {
            text : '多个折线'
          },
          xAxis : {
            type : 'time',
            labels : {
              renderer : function(text){
                var arr = text.split(':');
                return arr[0] + '时';
              }
            },
            formatter : function(value){
              var date = new Date(value);
              return date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
            },
            ticks : ticks,
            tickOffset : 10
          },
          yAxis : {
            title : {
              text : 'xxxxx'
            }
          },  
          tooltip : {
            shared : true,
            crosshairs : true
          },
          seriesOptions : {
            lineCfg : { 
              animate : false,
              pointStart : start.getTime(),
              pointInterval : interval,
              line : {
                'stroke-width' : 0.5
              },
              lineActived : {
                'stroke-width' : 0.5
              },
              markers : {
                single : true
              }//不显示marker,数据量大时，动画非常卡顿
            }
          },
          series : [ {
              name: 'New York',        
              //type : 'column',
              data: getData()
          },{
              name: 'beijing',        
              data: getData() 
          }]
        });
        
        
        function getData(){
          var data = [],                                                  
              i,pre;                                                        
                                                                          
          for (i = start.getTime(); i <= now.getTime(); i = i + interval) {   
            var value = getRandom(pre)                                 
            data.push(value);
            pre = value;                                                         
          }                                                               
          return data; 
        }
        function getRandom(pre){
          var r = Math.random(),
            factor = r > 0.45 ? 1 : -1;
          pre = pre || 100;
          return pre + Math.random() * 0.5 * factor;
        }

        chart.render();

        var series = chart.getSeries()[0],
            series1 = chart.getSeries()[1]; 

                                   
          setInterval(function() {                                    
              add();  //模拟异步请求
                                  
          }, interval);


          function add(){
            var data = series.get('data'),   
              y = getRandom(data[data.length-1]);  
              
            series.addPoint(y,false,false);  //第一个不重绘

            var data = series1.get('data'),   
              y = getRandom(data[data.length-1]);  
              
            series1.addPoint(y,false,true);
          }/**/
      </script>
<?php include("../../templates/control-footer.php"); ?>