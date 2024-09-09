// Chart line
const labels = ["March", "April", "May", "June", "July", "August", "September"];
const data = {
  labels: labels,
  datasets: [
    {
      label: "Data Structure",
      backgroundColor: "rgb(45, 77, 118)",
      borderColor: "rgb(45, 77, 118)",
      data: [0, 10, 5, 2, 20, 30, 45],
    },
  ],
};

const configLineChart = {
  type: "line",
  data,
  options: {},
};

var chartLine = new Chart(
  document.getElementById("chartLine"),
  configLineChart
);

//Chart doughnut
const dataDoughnut = {
  labels: ["Female", "Male"],
  datasets: [
    {
      label: "Sex Range",
      data: [300, 100],
      backgroundColor: ["rgb(45, 77, 118)", "rgb(220, 20, 60)"],
      hoverOffset: 4,
    },
  ],
};

const configDoughnut = {
  type: "doughnut",
  data: dataDoughnut,
  options: {},
};

var chartBar = new Chart(
  document.getElementById("chartDoughnut"),
  configDoughnut
);

//Age Range
const dataPie = {
  labels: ["18 - 25", "26 - 45", "46 - 70"],
  datasets: [
    {
      label: "Users Age Range",
      data: [300, 50, 100],
      backgroundColor: ["rgb(45, 77, 118)", "rgb(220, 20, 60)", "#0284c7"],
      hoverOffset: 4,
    },
  ],
};

const configPie = {
  type: "pie",
  data: dataPie,
  options: {},
};

var chartBar = new Chart(document.getElementById("chartPie"), configPie);

//sector Bar Chart
const sectorBarChart = ["Green Economy", "Retail", "Production"];
const secBarChart = {
  labels: sectorBarChart,
  datasets: [
    {
      label: "Sectoral Analysis",
      backgroundColor: ["#16a34a", "#dd2d38", "rgb(45, 77, 118)"],
      borderColor: "hsl(217, 57%, 51%)",
      data: [50, 100, 80],
    },
  ],
};

const configSectorBarChart = {
  type: "bar",
  data: secBarChart,
  options: {},
};

var chartBar = new Chart(
  document.getElementById("sectorChart"),
  configSectorBarChart
);

//demographics
const regions = ["SE", "SS", "NC", "NW", "NE", "SW"];
const demographics = {
  labels: regions,
  datasets: [
    {
      label: "Users by Demographics",
      backgroundColor: [
        "#eab308",
        "#2563eb",
        "#d97706",
        "#d946ef",
        "#14532d",
        "#b91c1c",
      ],
      borderColor: "hsl(217, 57%, 51%)",
      data: [10, 59, 88, 5, 61, 44],
    },
  ],
};

const configDemographics = {
  type: "bar",
  data: demographics,
  options: {},
};

var chartBar = new Chart(
  document.getElementById("demographics"),
  configDemographics
);
