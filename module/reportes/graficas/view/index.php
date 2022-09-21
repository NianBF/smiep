<style type="text/css">
    section .graph {
        width: 90%;
        display: block;
        margin: auto
    }
    div #graficaBarras {
        display: block;
        margin: auto
    }
</style>
<section class="graph">
    <div id="graficaBarras"></div>
</section>
<script type="text/javascript">
    function crearCadenaBarras(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for (var x in parsed) {
            arr.push(parsed[x]);
        }
        return arr;
    }
    datosX = crearCadenaBarras('<?php echo $datosX ?>');
    datosY = crearCadenaBarras('<?php echo $datosY ?>');

    var trace1 = {
        type: "bar",
        x: datosX,
        y: datosY,
        marker: {
            color: "#339999",
            line: {
                width: 1.5,
            },
        },
    };

    var data = [trace1];
    var layout = {
        title: "Cantidad de Productos",
        font: {
            size: 16
        },
    };
    var config = {
        responsive: true
    };

    Plotly.newPlot("graficaBarras", data, layout, config);
</script>