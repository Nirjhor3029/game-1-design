@extends('layouts.app')

@section('content')
    <div class="financial_statement">
        <div class="recruitment">
            <div class="row title">
                <div class="title-content col-sm-12 ">
                    <div class="title-header">
                        <img class="icon" src="{{ 'assets/images/icons/' }}/Financial_statements.svg" alt="Summery icon">
                        <h3>Financial statements</h3>
                    </div>

                    <p>
                        You need to make a cash flow statement, and profit and loss statement from the table. To make it
                        perfect please choose from the list.
                    </p>
                </div>

            </div>
        </div>

        <div class="details">
            <div class="row">
                <div class="col-6">
                    <a href="javascript:void(0)" id="btn-fs" class="btn btn-fs flex-column-center fs-active">
                        Financial statements
                    </a>
                </div>
                <div class="col-6 ">
                    <a href="javascript:void(0)" id="btn-cfs" class="btn btn-cfs flex-column-center">
                        Cash flow statement
                    </a>
                </div>
            </div>

            {{-- Financial Statement --}}
            <div class="row fs" style="margin-top: 36px">
                <div class="col-4">
                    <div class="items-container">
                        <ul>
                            <li class="item" draggable="true">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Salaries expenses</p>
                                <p class="bdt">BDT 8</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Salaries expenses</p>
                                <p class="bdt">BDT 8</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Salaries expenses</p>
                                <p class="bdt">BDT 8</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Salaries expenses</p>
                                <p class="bdt">BDT 8</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Material cost</p>
                                <p class="bdt">BDT 10</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Material cost</p>
                                <p class="bdt">BDT 10</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Material cost</p>
                                <p class="bdt">BDT 10</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Material cost</p>
                                <p class="bdt">BDT 10</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Revenues from A </p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Revenues from A </p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Revenues from A </p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Revenues from A </p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Debts payments</p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Debts payments</p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Debts payments</p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                            <li class="item">
                                <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                <p class="name">Debts payments</p>
                                <p class="bdt">BDT 100</p>
                                <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                    alt="Summery icon">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-8 ">
                    <div class="card revenue">
                        <div class="card-header flex-column-center">Revenue</div>
                        <div class="card-body">
                            <div class="items-container">
                                <ul>
                                    <li class="item">
                                        <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                        <p class="name">Revenues from A </p>
                                        <p class="bdt">BDT 100</p>
                                        <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                            alt="Summery icon">
                                    </li>
                                    <li class="item">
                                        <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                        <p class="name">Material cost</p>
                                        <p class="bdt">BDT 20</p>
                                        <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                            alt="Summery icon">
                                    </li>
                                    <li class="item">
                                        <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                        <p class="name">Revenues from A </p>
                                        <p class="bdt">BDT 100</p>
                                        <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                            alt="Summery icon">
                                    </li>
                                    <li class="item">
                                        <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                        <p class="name">Material cost</p>
                                        <p class="bdt">BDT 20</p>
                                        <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                            alt="Summery icon">
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="card-footer">
                            <p>Total Net Revenue</p>
                            <p>BDT 40</p>
                        </div>
                    </div>
                    <div class="card expenses">
                        <div class="card-header flex-column-center">Expenses</div>
                        <div class="card-body">
                            <div class="items-container">

                            </div>
                        </div>
                        <div class="card-footer">
                            <p>Total Expenses</p>
                            <p>BDT 00</p>
                        </div>
                    </div>


                </div>
            </div>


            {{-- Cash Flow Statement --}}
            <div class="cfs">
                <div class="row" style="margin-top: 36px">
                    <div class="col-4">
                        <div class="items-container">
                            <ul>
                                <li class="item" draggable="true">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Salaries expenses</p>
                                    <p class="bdt">BDT 8</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Salaries expenses</p>
                                    <p class="bdt">BDT 8</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Salaries expenses</p>
                                    <p class="bdt">BDT 8</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Salaries expenses</p>
                                    <p class="bdt">BDT 8</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Material cost</p>
                                    <p class="bdt">BDT 10</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Material cost</p>
                                    <p class="bdt">BDT 10</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Material cost</p>
                                    <p class="bdt">BDT 10</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Material cost</p>
                                    <p class="bdt">BDT 10</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Revenues from A </p>
                                    <p class="bdt">BDT 100</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Revenues from A </p>
                                    <p class="bdt">BDT 100</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Revenues from A </p>
                                    <p class="bdt">BDT 100</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Revenues from A </p>
                                    <p class="bdt">BDT 100</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Debts payments</p>
                                    <p class="bdt">BDT 100</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Debts payments</p>
                                    <p class="bdt">BDT 100</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Debts payments</p>
                                    <p class="bdt">BDT 100</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                                <li class="item">
                                    <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg" alt="Summery icon">
                                    <p class="name">Debts payments</p>
                                    <p class="bdt">BDT 100</p>
                                    <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                        alt="Summery icon">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card ">
                            <div class="card-header flex-column-center">Cash from customer</div>
                            <div class="card-body">
                                <div class="items-container">
                                    <ul>
                                        <li class="item">
                                            <img class="icon" src="{{ 'assets/images/icons/' }}/drag.svg"
                                                alt="Summery icon">
                                            <p class="name">Revenues from A </p>
                                            <p class="bdt">BDT 100</p>
                                            <img class=" icon-delete" src="{{ 'assets/images/icons/' }}/delete.svg"
                                                alt="Summery icon">
                                        </li>

                                    </ul>
                                </div>

                            </div>
                            <div class="card-footer">
                                <p>Total Net Revenue</p>
                                <p>BDT 40</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card expenses">
                            <div class="card-header flex-column-center">Cash for operating Expenses</div>
                            <div class="card-body">
                                <div class="items-container">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card expenses">
                            <div class="card-header flex-column-center">Cash to suppliers</div>
                            <div class="card-body">
                                <div class="items-container">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card expenses">
                            <div class="card-header flex-column-center">Cash for interest</div>
                            <div class="card-body">
                                <div class="items-container">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card expenses">
                            <div class="card-header flex-column-center">Cash for Taxes</div>
                            <div class="card-body">
                                <div class="items-container">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="cfs-total-expenses">
                    <p class="txt">Total Expenses</p>
                    <p class="bdt">BDT 00</p>
                </div>
                <div class="">
                    <div class="net-cashflow flex-column-center">
                        Net Cash flow: BDT 00
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
            $(document).ready(function() {
                let btnFs = $("#btn-fs");
                let btnCfs = $("#btn-cfs");
                let fs = $(".fs");
                let cfs = $(".cfs");
                btnFs.click(function() {
                    let that = $(this);
                    if (!that.hasClass("fs-active")) {
                        that.addClass("fs-active");
                        btnCfs.removeClass("cfs-active");

                        cfs.hide()
                        fs.show();
                    }
                });
                btnCfs.click(function() {
                    let that = $(this);
                    if (!that.hasClass("cfs-active")) {
                        that.addClass("cfs-active");
                        btnFs.removeClass("fs-active");

                        fs.hide()
                        cfs.show();
                    }
                });
            });

        </script>

    </div>

@endsection
