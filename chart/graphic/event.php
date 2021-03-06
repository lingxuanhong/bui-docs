<?php $title="图形事件"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">  
      <h2>基本图形</h2>
      <p>显示点击的图形类型</p>
      <div class="well" id="log">
        
      </div>
      <div id="canvas">
        
      </div>
      
    </div>

    <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script> 
    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
    
      //创建画板
      var canvas = new AChart.Canvas({
        id : 'canvas',
        height : 800,
        width : 500
      });

      //画矩形，也可以指定额外的信息，如id,elCls
      canvas.addShape({
        type : 'rect',
        id : 'rect', //canvas.find('rect');既可以查找到
        elCls : 'my-rect',
        attrs : {
          x : 100,
          y : 0,
          r : 5,
          width : 50,
          height: 50,
          stroke : 'yellow',
          fill : 'red'
        }
      });

      var group = canvas.addGroup();

      //圆
     var circle =  group.addShape('circle',{
        cx : 125,
        cy : 100,
        r : 20,
        fill : '#2f7ed8',
        stroke : 'red'
      });

      //椭圆
      group.addShape('ellipse',{
        cx : 200,
        cy : 100,
        rx : 20,
        ry : 30,
        fill : 'yellow'
      });

      //多边形
      canvas.addShape('polygon',{
        points : ['10,150','110,150','60,200'],
        stroke : '#c0c0c0'
      });

      //图片
      canvas.addShape('image',{
        x : 0,
        y : 400,
        width : 200,
        height : 250,
        src : 'http://i.mmcdn.cn/simba/img/T1dOKRFyVeXXb1upjX.jpg'
      });

      canvas.on('click',function (ev) {
        var shape = ev.target.shape;
        if(shape){
          $('#log').text(shape.get('type'));
        }
      });

      group.on('click',function(ev){
        var shape = ev.target.shape;
        if(shape){
          $('#log').text('group click ' + shape.get('type'));
          ev.stopPropagation();
        }
      });

      circle.on('mouseover',function(){
        circle.attr('fill','blue');
      });

      circle.on('mouseout',function(){
        circle.attr('fill','red');
      });
      </script>
<?php include("../../templates/control-footer.php"); ?>