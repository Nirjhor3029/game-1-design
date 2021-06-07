@extends('layouts.app')

@section('content')
    <div class="recruitment">
        <div class="row title">
            <div class="title-content col-sm-12 ">
                <div class="title-header">
                    <img class="icon" src="{{ 'assets/images/icons/' }}/Recruitment.svg" alt="Summery icon">
                    <h3>Recruitment</h3>
                </div>

                <p>
                    You need to recruit 3 managers, one HR manager, and one BDM, and 1 Sales manager in your team. For that
                    you have only 5 BDT budget, and sales manager can only have salaries in sales, no fixed amount
                    therefore. And CEO’s salary is 3 BDT
                </p>
            </div>

        </div>

        <div class="details">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="recruitment_title">
                        <h4>HR Manager</h4>
                    </div>
                    <div class="recruitment_content_box">
                        <img class="recruitment_img" src="{{ 'assets/images/icons/' }}/User.svg" alt="">
                        <hr>
                        <p>Input Salary</p>
                        {{-- <input type="number"> --}}

                        <div class="handle-counter" id="hr_handleCounter">
                            <button class="counter-minus btn">-</button>
                            <input type="text" value="0">
                            <button class="counter-plus btn">+</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="recruitment_title">
                        <h4>BDM</h4>
                    </div>
                    <div class="recruitment_content_box">
                        <img class="recruitment_img" src="{{ 'assets/images/icons/' }}/User.svg" alt="">
                        <hr>
                        <p>Input Salary</p>
                        {{-- <input type="number"> --}}

                        <div class="handle-counter" id="bdm_handleCounter">
                            <button class="counter-minus btn">-</button>
                            <input type="text" value="0">
                            <button class="counter-plus btn">+</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="recruitment_title">
                        <h4>Sales Manager</h4>
                    </div>
                    <div class="recruitment_content_box">
                        <img class="recruitment_img" src="{{ 'assets/images/icons/' }}/User.svg" alt="">
                        <hr>
                        <p>Input Salary</p>
                        {{-- <input type="number"> --}}

                        <div class="handle-counter" id="sm_handleCounter">
                            <button class="counter-minus btn">-</button>
                            <input type="text" value="0">
                            <button class="counter-plus btn">+</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 recruitment_total_btn_parent">
                    <p>
                        Your value is geather than your <br> budget.
                    </p>
                    <a href="" class="btn recruitment_total_btn">Total: 10 BDT</a>
                    <a href="" class="btn recruitment_total_btn">Total OPEX</a>

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
            $('#hr_handleCounter').handleCounter();
            $('#hr_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })

            $('#bdm_handleCounter').handleCounter();
            $('#bdm_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })

            $('#sm_handleCounter').handleCounter();
            $('#sm_handleCounter').handleCounter({
                minimum: 0,
                maximize: null,
            })

        </script>
    </div>

@endsection
