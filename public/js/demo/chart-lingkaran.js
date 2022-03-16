const data = {
    // labelnya data chartnya
    labels: ["Red", "Blue", "Yellow"],
    datasets: [
      {
        // data chartnya
        data: [25, 25, 50],

        // warna data chartnya
        backgroundColor: [
          "rgb(38, 47, 89)",
          "rgb(82, 225, 227)",
          "rgb(54, 97, 237)",
        ],
        hoverOffset: 2,
      },
    ],
  };

  const config = {
    type: "doughnut",
    data: data,
    options: {
      borderWidth: 0,
      cutout: "88.32%",
      plugins: {
        legend: {
          display: false,
        },
      },
    },
  };

  const myChart = new Chart(document.getElementById("myChart"), config);