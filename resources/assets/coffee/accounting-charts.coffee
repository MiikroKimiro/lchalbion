$("#LCgeneral").change ->
  n = $(this).val()
  switch n
    when "week"
      Morris.Area
      element: 'acc-lineChart-gen',
      data: $LCGeneralWeek,
      xkey: 'date',
      ykeys: ['total'],
      xLabels:"day",
      labels: ['Total'],
      resize: true