
@extends('layouts.admin')
@section('title')
    Welcome admin
@endsection
@section('content')


<section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start pl-3 lg:pr-8 pr-3  gap-8">
    <!-- List of submitted solution -->
    <main class="w-full flex flex-col gap-7 lg:my-8 my-4 lg:pr-8 md:pr-2 pr-1" data-aos="fade-up"
        data-aos-duration="1000">
        <!-- search  input -->
        <!--<form action="" class="flex justify-start gap-2 items-center" data-aos="fade-up"-->
        <!--    data-aos-duration="1000">-->
        <!--    <label for="filter" class="text-sm md:text-base font-medium text-primary">Search:</label>-->
        <!--    <input type="text" name="search" placeholder="search..."-->
        <!--        class="border-none text-sm lg:w-1/4 md:w-1/2 w-1/2  font-light rounded-md bg-slate-100 py-1.5 px-2 focus:outline focus:outline-primary">-->
        <!--</form>-->

        <h1 class=" lg:text-2xl text-base text-center font-medium text-primary" data-aos="fade-up"
            data-aos-duration="1000">Users <span class="text-gradient">Inflow Rate</span></h1>



        <div class="w-full justify-center flex gap-1" data-aos="fade-up" data-aos-duration="1000">
            <h3
                class="flex flex-col items-center justify-center text-primary md:px-7 px-4 md:py-2 py-1 text-xs bg-slate-100 border-b border-primary">
                <span>All users</span>
                <span>{{ $usersCount }}</span>
            </h3>
            <h3
                class="flex flex-col items-center justify-center text-primary font-light md:px-7 px-4 md:py-2 py-1 text-xs bg-slate-100 border-b border-primary">
                <span>Applicants</span>
                <span>{{ $applicantCount }}</span>
            </h3>
            <h3
                class="flex flex-col items-center justify-center text-primary font-light md:px-7 px-4 md:py-2 py-1 text-xs bg-slate-100 border-b border-primary">
                <span>Submitted Applicants</span>
                <span>{{ $submitted }}</span>
            </h3>
            <h3
                class="flex flex-col items-center justify-center text-primary md:px-7 px-4 md:py-2 py-1 text-xs bg-slate-100 border-b border-primary">
                <span>Independent Reviewers</span>
                <span>{{ $reviwerCount }}</span>
            </h3>
            <h3
                class="flex flex-col items-center justify-center text-primary font-light md:px-7 px-4 md:py-2 py-1 text-xs bg-slate-100 border-b border-primary">
                <span>Judges</span>
                <span>{{ $judgesCount }}</span>
            </h3>
        </div>

        <!-- Line Chart  -->
        <div class="w-full h-auto" data-aos="fade-up" data-aos-duration="1000">
            <canvas class="lg:p-8 md:p-6" id="chartLine"></canvas>
        </div>



        <!-- Computional Analysis  -->
        <section class="w-full h-auto flex flex-col gap-4 mt-8 shadow-md bg-slate-100 p-4"
            data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-primary md:text-2xl text-xl">Computational <span
                    class="text-gradient">Analysis</span></h1>

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-white">
                    <thead class="text-xs uppercase bg-secondary text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Solution
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sector
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Average
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ranking
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($review as $rev)
                        <tr class="border-b cursor-pointer hover:bg-primary/80 bg-primary">
                            <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                {{$rev->business}}
                            </th>
                            <td class="px-6 py-4">
                                <button
                                    class="text-secondary bg-gray-100 px-4 py-1 rounded-md"> {{ucfirst($rev->target_sector)}}</button>
                            </td>
                            <td class="px-6 py-4">
                                 {{$rev->average}}
                            </td>
                            <td class="px-6 py-4">
                                 {{$loop->index + 1}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </section>

        <!-- Sectoral Analysis -->
        <section class="flex flex-col gap-4 md:px-4 mt-5" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-primary md:text-2xl text-xl">Sectoral<span class="text-gradient">
                    Analysis</span>
            </h1>
            <main class="w-full grid md:grid-cols-3 gap-6 md:gap-0">
                <!-- Bar Chart for sectors -->
                <div class="w-full h-auto md:col-span-2" data-aos="fade-up" data-aos-duration="1000">
                    <canvas id="sectorChart"></canvas>
                </div>
                <div class="flex flex-col md:items-center pl-6 md:pl-0 justify-center ">
                    <ul>
                        <li
                            class="text-green-600 text-base font-poppin before:content-[''] before:w-3 before:h-3 before:bg-green-600 before:inline-block block">
                            Green Economy</li>
                        <li
                            class="text-secondary text-base font-poppin before:content-[''] before:w-3 before:h-3  before:bg-secondary before:inline-block block">
                            Retail</li>
                        <li
                            class="text-primary text-base font-poppin before:content-[''] before:w-3 before:h-3  before:bg-primary before:inline-block block">
                            Manufacturing/Production</li>
                    </ul>
                </div>
            </main>
        </section>

        <!-- Users by Demographics  -->
        <section
            class="flex flex-col items-center shadow-md bg-slate-100 rounded-md py-7 px-4 gap-8 md:px-4 md:my-8 my-4"
            data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-primary md:text-2xl text-xl">Applicants by <span
                    class="text-gradient">Demographics</span>
            </h1>
            <main class="w-full grid md:grid-cols-3 gap-6 md:gap-8">
                <!-- Map -->
                <div class="w-full flex justify-center items-center h-auto" data-aos="fade-up"
                    data-aos-duration="1000">
                    <div class="w-full h-64">
                        <img src="../images/map.png" alt="Map" class="w-full h-full">
                    </div>

                </div>
                <div class="flex flex-col md:col-span-2 md:items-center justify-center ">
                    <canvas id="demographics"></canvas>
                </div>
                

            </main>
        </section>
        
                <!-- Donghourt chart & Pie Chart  -->
        <section style="margin-top: -57px" class="w-full grid md:grid-cols-2 gap-4">
                        <div class="w-full grid grid-cols-2 bg-slate-100 rounded-md h-60" data-aos="fade-up"
                data-aos-duration="1000">
            <!--    <h1 class="text-primary md:text-2xl text-xl">Gender<span class="text-gradient">-->
            <!--        Demography</span>-->
            <!--</h1>-->
                <canvas class="p-4" id="chartDoughnut"></canvas>
                <div class="flex flex-col justify-center items-center">
                    <h3 class="text-gradient">Gender Demography</h3>
                    <!--<ul>-->
                    <!--    <li-->
                    <!--        class="text-primary text-base font-poppin before:content-[''] before:w-3 before:h-3 before:rounded-full before:bg-primary before:inline-block block">-->
                    <!--        Female</li>-->
                    <!--    <li-->
                    <!--        class="text-secondary text-base font-poppin before:content-[''] before:w-3 before:h-3 before:rounded-full before:bg-secondary before:inline-block block">-->
                    <!--        Male</li>-->
                    <!--</ul>-->
                </div>
            </div>
            <div class="w-full grid grid-cols-2 bg-slate-100 rounded-md h-60" data-aos="fade-up"
                data-aos-duration="1000">
                <!--<h1 class="text-primary md:text-2xl text-xl">Age<span class="text-gradient">-->
                <!--    Demography</span>-->
                <canvas class="p-4" id="chartPie"></canvas>
                <div class="flex flex-col justify-center items-center">
                    <h3 class="text-gradient">Age Demography</h3>
                    <!--<ul>-->
                    <!--    <li-->
                    <!--        class="text-primary text-base font-poppin before:content-[''] before:w-3 before:h-3 before:rounded-full before:bg-primary before:inline-block block">-->
                    <!--        18 - 25</li>-->
                    <!--    <li-->
                    <!--        class="text-secondary text-base font-poppin before:content-[''] before:w-3 before:h-3 before:rounded-full before:bg-secondary before:inline-block block">-->
                    <!--       26 - 35</li>-->
                    <!--    <li-->
                    <!--        class="text-sky-600 text-base font-poppin before:content-[''] before:w-3 before:h-3 before:rounded-full before:bg-green-600 before:inline-block block">-->
                    <!--        36 - 45</li>-->
                    <!--        <li-->
                    <!--        class="text-secondary text-base font-poppin before:content-[''] before:w-3 before:h-3 before:rounded-full before:bg-sky-600 before:inline-block block">-->
                    <!--        46 - 55</li>-->
                    <!--    <li-->
                    <!--        class="text-sky-600 text-base font-poppin before:content-[''] before:w-3 before:h-3 before:rounded-full before:bg-sky-600 before:inline-block block">-->
                    <!--        55+</li>-->
                    <!--</ul>-->
                </div>
            </div>
        </section>

    </main>
</section>
    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Chart line
const labels = ["All Users", "Applicants","Independent Reviewers", "Judges"]; 
const data = {
  labels: labels,
  datasets: [
    {
      label: "",
      backgroundColor: "#fff",
      borderColor: "rgb(45, 77, 118)",
      data: [{{ $usersCount }}, {{ $applicantCount }}, {{ $reviwerCount }}, {{ $judgesCount }}],
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
      data: [{{ $sexFemaleCount }}, {{$sexMaleCount}}],
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
  labels: ["18 - 25", "26 - 35", "36 - 45", "46 - 55", "55+"],
  datasets: [
    {
      label: "Users Age Range",
      data: [{{$ageOneCount}}, {{$ageTwoCount}}, {{$ageThreeCount}}, {{$ageFourCount}}, {{$ageFiveCount}}],
      backgroundColor: ["rgb(45, 77, 118)", "rgb(220, 20, 60)", "rgb(100, 200, 50)", "rgb(20, 150, 255)", "rgb(255, 165, 0)"],
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
const sectorBarChart = ["Green Economy", "Retail", "Manufacturing/Production"];
const secBarChart = {
  labels: sectorBarChart,
  datasets: [
    {
      label: "",
      backgroundColor: ["#16a34a", "#dd2d38", "rgb(45, 77, 118)"],
      borderColor: "hsl(217, 57%, 51%)",
      data: [{{$green}}, {{$retail}}, {{$manufacturing}}],
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
      label: "",
      backgroundColor: [
        "#eab308",
        "#2563eb",
        "#d97706",
        "#d946ef",
        "#14532d",
        "#b91c1c",
      ],
      borderColor: "hsl(217, 57%, 51%)",
      data: [{{$southeast}}, {{$southsouth}}, {{$northcentral}}, {{$northwest}}, {{$northeast}}, {{$southwest}}],
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

</script>

@endsection