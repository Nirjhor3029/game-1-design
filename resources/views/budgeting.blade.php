@extends('layouts.app')

@section('content')
    <div class="budgeting">
        <div class="recruitment">
            <div class="row title">
                <div class="title-content col-sm-12 ">
                    <div class="title-header">
                        <img class="icon" src="{{ 'assets/images/icons/' }}/Budgeting.svg" alt="Summery icon">
                        <h3>Budgeting</h3>
                    </div>

                    <p>
                        You have total 15 BDT to launch Teaco. You need to decide how much would you spend in Bangladesh and
                        in Nepal. Remember, Bangladesh has 3X more consumers than Nepal.
                    </p>
                </div>

            </div>
        </div>


        <div class="details">
            <div class="row">
                <div class="col-md-5 budget-box">
                    <div class="card">
                        <div class="card-header">
                            <h3>Budget of BD</h3>
                            <h3>10 BDT</h3>
                        </div>
                        <div class="card-body">
                            <div class="input_field">
                                <p>Recruitment</p>
                                <div class="handle-counter" id="bd_r_handleCounter">
                                    <button class="counter-minus btn">-</button>
                                    <input type="text" value="0">
                                    <button class="counter-plus btn">+</button>
                                </div>
                            </div>

                            <div class="input_field">
                                <p>Manufacturing</p>
                                <div class="handle-counter" id="bd_m_handleCounter">
                                    <button class="counter-minus btn">-</button>
                                    <input type="text" value="0">
                                    <button class="counter-plus btn">+</button>
                                </div>
                            </div>

                            <div class="input_field">
                                <p>Launch</p>
                                <div class="handle-counter" id="bd_l_handleCounter">
                                    <button class="counter-minus btn">-</button>
                                    <input type="text" value="0">
                                    <button class="counter-plus btn">+</button>
                                </div>
                            </div>

                            <div class="input_field">
                                <p>Others</p>
                                <div class="handle-counter" id="bd_o_handleCounter">
                                    <button class="counter-minus btn">-</button>
                                    <input type="text" value="0">
                                    <button class="counter-plus btn">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 budget-box">
                    <div class="card">
                        <div class="card-header">
                            <h3>Budget of NP</h3>
                            <h3>10 BDT</h3>
                        </div>
                        <div class="card-body">
                            <div class="input_field">
                                <p>Recruitment</p>
                                <div class="handle-counter" id="np_r_handleCounter">
                                    <button class="counter-minus btn">-</button>
                                    <input type="text" value="0">
                                    <button class="counter-plus btn">+</button>
                                </div>
                            </div>

                            <div class="input_field">
                                <p>Manufacturing</p>
                                <div class="handle-counter" id="np_m_handleCounter">
                                    <button class="counter-minus btn">-</button>
                                    <input type="text" value="0">
                                    <button class="counter-plus btn">+</button>
                                </div>
                            </div>

                            <div class="input_field">
                                <p>Launch</p>
                                <div class="handle-counter" id="np_l_handleCounter">
                                    <button class="counter-minus btn">-</button>
                                    <input type="text" value="0">
                                    <button class="counter-plus btn">+</button>
                                </div>
                            </div>

                            <div class="input_field">
                                <p>Others</p>
                                <div class="handle-counter" id="np_o_handleCounter">
                                    <button class="counter-minus btn">-</button>
                                    <input type="text" value="0">
                                    <button class="counter-plus btn">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 budget-box">
                    <div class="card ">
                        <div class="card-body total">
                            <p class="txt">Total Budget</p>
                            <p class="bdt">10 BDT</p>
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
        </div>


        <script>
            $('#bd_r_handleCounter').handleCounter();
            $('#bd_r_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#bd_m_handleCounter').handleCounter();
            $('#bd_m_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#bd_l_handleCounter').handleCounter();
            $('#bd_l_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#bd_o_handleCounter').handleCounter();
            $('#bd_o_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })

            //
            $('#np_r_handleCounter').handleCounter();
            $('#np_r_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#np_m_handleCounter').handleCounter();
            $('#np_m_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#np_l_handleCounter').handleCounter();
            $('#np_l_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })
            $('#np_o_handleCounter').handleCounter();
            $('#np_o_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })

        </script>
    </div>

@endsection
