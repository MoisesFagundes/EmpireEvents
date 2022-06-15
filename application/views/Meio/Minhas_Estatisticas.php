                            <div class="registration-page-area bg-secondary section-space-bottom">
                                <div class="registration-details-area">
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="fundo-grafico">
                                            <center><div id="grafico-de-faturamento" style="width: 100%; height: 300px;"></div></center>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            
                            <script type="text/javascript">
                            google.charts.load('current', {'packages':['bar']});
                            google.charts.setOnLoadCallback(drawStuff);

                            function drawStuff() {
                                var data = new google.visualization.arrayToDataTable([   
                                ['Move', 'Percentage'],
                                ['Janeiro', <?=  $Minhas_Estasticas['numeros'][0] ?>],
                                ['Fevereiro', <?=  $Minhas_Estasticas['numeros'][1] ?>],
                                ['Março', <?=  $Minhas_Estasticas['numeros'][2] ?>],
                                ['Abril', <?=  $Minhas_Estasticas['numeros'][3] ?>],
                                ['Maio', <?=  $Minhas_Estasticas['numeros'][4] ?>],
                                ['Junho', <?=  $Minhas_Estasticas['numeros'][5] ?>],
                                ['Julho', <?=  $Minhas_Estasticas['numeros'][6] ?>],
                                ['Agosto', <?=  $Minhas_Estasticas['numeros'][7] ?>],
                                ['Setembro', <?=  $Minhas_Estasticas['numeros'][8] ?>],
                                ['Outubro', <?=  $Minhas_Estasticas['numeros'][9] ?>],
                                ['Novembro', <?=  $Minhas_Estasticas['numeros'][10] ?>],
                                ['Dezembro', <?=  $Minhas_Estasticas['numeros'][11] ?>]
                                ]);

                                var options = {
                                legend: { position: 'none' },
                                chart: {
                                    title: '<?= $Minhas_Estasticas['Titulo'] ?>',
                                    subtitle: 'popularity by percentage' },
                                axes: {
                                    x: {
                                    0: { side: 'top', label: '<?= $Minhas_Estasticas['Sub-Titulo'] ?>'} // Top x-axis.
                                    }
                                },
                                bar: { groupWidth: "90%" }
                                };

                                var chart = new google.charts.Bar(document.getElementById('grafico-de-faturamento'));
                                // Convert the Classic options to Material options.
                                chart.draw(data, google.charts.Bar.convertOptions(options));
                            };
                            </script>            

