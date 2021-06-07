@extends('layouts.app')

@section('content')
    <div class="revenue">
        <div class="recruitment">
            <div class="row title">
                <div class="title-content col-sm-12 ">
                    <div class="title-header">
                        <img class="icon" src="{{ 'assets/images/icons/' }}/Revenue.svg" alt="Revenue icon">
                        <h3>Revenue Bangladesh</h3>
                    </div>

                    <p>
                        You need to make sure you sell 2 items ( A, B)from the day you launch Teaco in Bangladesh, and 1
                        items in Nepal. ( A). For each products to produce, cost will be: A: 2 BDT, B: 1 BDT. Now, you need
                        to project how many items do you need to sell to gain 10% of the market share in Bangladesh. You
                        should bear in mind that competitor for A priced at 3 BDT, and B priced at 6 BDT. Put your price
                        too. Based on your pricing, what would be the revenues you would get in month 1, and if you gain 10%
                        additional sales in B plus 30% additional sales for B in Month 2, how much would you revenue you
                        would earn in 2 months timeline.
                    </p>
                </div>

            </div>
        </div>

        <div class="details">
            <div class="revenue-tabs">
                <a href="" class="btn btn-revenue-tabs btn-bd">Revenue BD</a>
                <a href="" class="btn btn-revenue-tabs btn-np">Revenue NP</a>
                <a href="" class="btn btn-revenue-tabs btn-chart">Revenue Chart</a>
            </div>

            <div class="row product-box">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            Product A
                        </div>
                        <div class="card-body">
                            <div class="input_field row">
                                <div class="col-md-7">
                                    <div class="handle-counter" id="bd_A_pc_handleCounter">
                                        <button class="counter-minus btn">-</button>
                                        <input type="text" value="0">
                                        <button class="counter-plus btn">+</button>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <p>Production cost</p>
                                </div>
                            </div>

                            <div class="input_field row">
                                <div class="col-md-7">
                                    <div class="handle-counter" id="bd_A_opx_handleCounter">
                                        <button class="counter-minus btn">-</button>
                                        <input type="text" value="0">
                                        <button class="counter-plus btn">+</button>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <p>OPEX</p>
                                </div>
                            </div>

                            <div class="input_field row">
                                <div class="col-md-7">
                                    <div class="handle-counter" id="bd_A_tc_handleCounter">
                                        <button class="counter-minus btn">-</button>
                                        <input type="text" value="0">
                                        <button class="counter-plus btn">+</button>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <p>Total cost</p>
                                </div>
                            </div>

                            <div class="input_field row">
                                <div class="col-md-7">
                                    <div class="handle-counter" id="bd_A_cp_handleCounter">
                                        <button class="counter-minus btn">-</button>
                                        <input type="text" value="0">
                                        <button class="counter-plus btn">+</button>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <p>Competitor’s Price</p>
                                </div>
                            </div>

                            <div class="row mb-10">
                                <div class="col-md-7">
                                    <div class="row ml-0 mr-0">
                                        <div class="col-3 col-sm-3 markup-txt">
                                            <p><span class="markup_number" id="bd_pa_markup_number"></span>%</p>
                                        </div>
                                        <div class="col-9 col-sm-9 slidecontainer">
                                            <input type="range" min="1" max="100" value="50" class="slider"
                                                id="bd_pa_markup_range">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-5">
                                    <p>Mark up %</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 price">
                                    <p class="price-txt">Price:</p>
                                    <div class="price-input">
                                        <input type="number" value="0">
                                    </div>
                                </div>
                                <div class="col-md-5">

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="unit_sold">
                        <div class="txt">
                            Units Sold
                        </div>
                        <div class="radio_btn">
                            <label class="radio_lbl" for="radio_0">
                                <input type="radio" class="radio_input" id="radio_0" name="unit_sold_radio" value="0">
                                <p>0</p>
                            </label>
                            <label class="radio_lbl" for="radio_20">
                                <input type="radio" class="radio_input" id="radio_20" name="unit_sold_radio" value="20">
                                <p>20</p>
                            </label>
                            <label class="radio_lbl" for="radio_30">
                                <input type="radio" class="radio_input" id="radio_30" name="unit_sold_radio" value="30">
                                <p>30</p>
                            </label>
                            <label class="radio_lbl" for="radio_40">
                                <input type="radio" class="radio_input" id="radio_40" name="unit_sold_radio" value="40">
                                <p>40</p>
                            </label>
                            <label class="radio_lbl" for="radio_50">
                                <input type="radio" class="radio_input" id="radio_50" name="unit_sold_radio" value="50">
                                <p>50</p>
                            </label>
                        </div>
                    </div>

                    <div class="unit_sold">
                        <div class="txt">
                            Revenue
                        </div>
                        <div class="radio_btn">
                            <input class="revenue_input" type="text" value="0">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            Product B
                        </div>
                        <div class="card-body">
                            <div class="input_field row">
                                <div class="col-md-7">
                                    <div class="handle-counter" id="bd_B_pc_handleCounter">
                                        <button class="counter-minus btn">-</button>
                                        <input type="text" value="0">
                                        <button class="counter-plus btn">+</button>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <p>Production cost</p>
                                </div>
                            </div>

                            <div class="input_field row">
                                <div class="col-md-7">
                                    <div class="handle-counter" id="bd_B_opx_handleCounter">
                                        <button class="counter-minus btn">-</button>
                                        <input type="text" value="0">
                                        <button class="counter-plus btn">+</button>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <p>OPEX</p>
                                </div>
                            </div>

                            <div class="input_field row">
                                <div class="col-md-7">
                                    <div class="handle-counter" id="bd_B_tc_handleCounter">
                                        <button class="counter-minus btn">-</button>
                                        <input type="text" value="0">
                                        <button class="counter-plus btn">+</button>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <p>Total cost</p>
                                </div>
                            </div>

                            <div class="input_field row">
                                <div class="col-md-7">
                                    <div class="handle-counter" id="bd_B_cp__handleCounter">
                                        <button class="counter-minus btn">-</button>
                                        <input type="text" value="0">
                                        <button class="counter-plus btn">+</button>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <p>Competitor’s Price</p>
                                </div>
                            </div>


                            <div class="row mb-10">
                                <div class="col-md-7">
                                    <div class="row ml-0 mr-0">
                                        <div class="col-3 col-sm-3 markup-txt">
                                            <p><span class="markup_number" id="bd_pb_markup_number"></span>%</p>
                                        </div>
                                        <div class="col-9 col-sm-9 slidecontainer">
                                            <input type="range" min="1" max="100" value="50" class="slider"
                                                id="bd_pb_markup_range">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-5">
                                    <p>Mark up %</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 price">
                                    <p class="price-txt">Price:</p>
                                    <div class="price-input">
                                        <input type="number" value="0">
                                    </div>
                                </div>
                                <div class="col-md-5">

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="unit_sold">
                        <div class="txt">
                            Units Sold
                        </div>
                        <div class="radio_btn">
                            <label class="radio_lbl" for="radio_bdb_0">
                                <input type="radio" class="radio_input" id="radio_0" name="unit_sold_bd_b_radio" value="0">
                                <p>0</p>
                            </label>
                            <label class="radio_lbl" for="radio_bdb_20">
                                <input type="radio" class="radio_input" id="radio_bdb_20" name="unit_sold_bd_b_radio"
                                    value="20">
                                <p>20</p>
                            </label>
                            <label class="radio_lbl" for="radio_bdb_30">
                                <input type="radio" class="radio_input" id="radio_bdb_30" name="unit_sold_bd_b_radio"
                                    value="30">
                                <p>30</p>
                            </label>
                            <label class="radio_lbl" for="radio_bdb_40">
                                <input type="radio" class="radio_input" id="radio_bdb_40" name="unit_sold_bd_b_radio"
                                    value="40">
                                <p>40</p>
                            </label>
                            <label class="radio_lbl" for="radio_bdb_50">
                                <input type="radio" class="radio_input" id="radio_bdb_50" name="unit_sold_bd_b_radio"
                                    value="50">
                                <p>50</p>
                            </label>
                        </div>
                    </div>

                    <div class="unit_sold">
                        <div class="txt">
                            Revenue
                        </div>
                        <div class="radio_btn">
                            <input class="revenue_input" type="text" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="prev_next_div">
            <a href="" class="btn btn-game1 btn-next">
                Previous
                <img class="icon" src="{{ 'assets/images/icons/' }}/Previous.svg" alt="Previous icon">
            </a>
            <a href="" class="btn btn-game1 btn-next">
                Next
                <img class="icon" src="{{ 'assets/images/icons/' }}/Next.svg" alt="Next icon">
            </a>
        </div>


        <script>
            // BD - input number
            // Product-A
            $('#bd_A_pc_handleCounter').handleCounter();
            $('#bd_A_pc_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#bd_A_opx_handleCounter').handleCounter();
            $('#bd_A_opx_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#bd_A_tc_handleCounter').handleCounter();
            $('#bd_A_tc_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#bd_A_cp_handleCounter').handleCounter();
            $('#bd_A_cp_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            // Product b
            $('#bd_B_pc_handleCounter').handleCounter();
            $('#bd_B_pc_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#bd_B_opx_handleCounter').handleCounter();
            $('#bd_B_opx_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#bd_B_tc_handleCounter').handleCounter();
            $('#bd_B_tc_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#bd_B_cp__handleCounter  ').handleCounter();
            $('#bd_B_cp__handleCounter  ').handleCounter({
                minimum: 0,
                maximize: null,
            })

            // NP - input number
            // Product-A
            $('#np_A_pc_handleCounter').handleCounter();
            $('#np_A_pc_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#np_A_opx_handleCounter').handleCounter();
            $('#np_A_opx_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#np_A_tc_handleCounter').handleCounter();
            $('#np_A_tc_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#np_A_cp_handleCounter').handleCounter();
            $('#np_A_cp_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            // Product b
            $('#np_B_pc_handleCounter').handleCounter();
            $('#np_B_pc_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#np_B_opx_handleCounter').handleCounter();
            $('#np_B_opx_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#np_B_tc_handleCounter').handleCounter();
            $('#np_B_tc_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#np_B_cp__handleCounter  ').handleCounter();
            $('#np_B_cp__handleCounter  ').handleCounter({
                minimum: 0,
                maximize: null,
            })



            // BD
            var slider_bd_pa = document.getElementById("bd_pa_markup_range");
            var output_bd_pa = document.getElementById("bd_pa_markup_number");
            var slider_bd_pb = document.getElementById("bd_pb_markup_range");
            var output_bd_pb = document.getElementById("bd_pb_markup_number");

            var slider_np_pa = document.getElementById("np_pa_markup_range");
            var output_np_pa = document.getElementById("np_pa_markup_number");

            var slider_np_pb = document.getElementById("np_pb_markup_range");
            var output_np_pb = document.getElementById("np_pb_markup_number");



            output_bd_pa.innerHTML = slider_bd_pa.value;
            slider_bd_pa.oninput = function() {
                output_bd_pa.innerHTML = this.value;
            }
            output_bd_pb.innerHTML = slider_bd_pb.value;
            slider_bd_pb.oninput = function() {
                output_bd_pb.innerHTML = this.value;
            }


            // NP

        </script>
    </div>

@endsection
