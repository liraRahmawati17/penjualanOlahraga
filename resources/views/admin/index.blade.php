@extends('layouts.admin')


@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-8">
                    <!-- small box -->
                    <div class="small-box" style="font-weight: bold; background-color: #26BBB0 ">
                        <div class="inner">
                            <p style="font-weight : bold">data barang</p>
                            <h3 style="text-align: center;"></h3>
                            <h3><b>{{ DB::table('barangs')->count() }}</b></h3>


                        </div>
                        <div class="icon">
                            <svg width="90" height="90" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_205_9)">
                                    <path
                                        d="M8.186 1.113C8.06662 1.06516 7.93338 1.06516 7.814 1.113L1.846 3.5L4.25 4.461L10.404 2L8.186 1.113ZM11.75 2.539L5.596 5L8 5.961L14.154 3.5L11.75 2.539V2.539ZM15 4.239L8.5 6.839V14.761L15 12.161V4.24V4.239ZM7.5 14.762V6.838L1 4.239V12.162L7.5 14.762V14.762ZM7.443 0.184002C7.80057 0.0410015 8.19943 0.0410015 8.557 0.184002L15.686 3.036C15.7787 3.07315 15.8581 3.13719 15.9141 3.21989C15.9701 3.30259 16 3.40015 16 3.5V12.162C15.9999 12.3618 15.9399 12.557 15.8278 12.7224C15.7157 12.8878 15.5566 13.0159 15.371 13.09L8.186 15.964C8.06662 16.0118 7.93338 16.0118 7.814 15.964L0.63 13.09C0.444251 13.016 0.284942 12.8881 0.172642 12.7226C0.0603417 12.5572 0.000206329 12.3619 0 12.162L0 3.5C2.32399e-05 3.40015 0.0299437 3.30259 0.085907 3.21989C0.14187 3.13719 0.221313 3.07315 0.314 3.036L7.443 0.184002Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_205_9">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>


                        </div>
                        <a href="{{ route('barang.index') }}" class="small-box-footer bg-red"> Lihat Detail <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-8">
                    <!-- small box -->
                    <div class="small-box" style="font-weight: bold; background-color: #26BBB0   ">
                        <div class="inner">
                            <p style="font-weight : bold">data suplier</p>
                            <center> </center>

                            <h3 style="text-align: center;"></h3>
                            <h3><b>{{ DB::table('supliers')->count() }}</b></h3>
                        </div>
                        <div class="icon">
                            <svg width="90" height="90" viewBox="0 0 256 256" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_204_2)">
                                    <path
                                        d="M182.904 88.7888C182.31 88.7888 181.719 88.6011 181.224 88.2286L161.061 73.1267L140.898 88.2286C140.046 88.8672 138.917 88.9708 137.965 88.4919C137.016 88.0186 136.416 87.0467 136.416 85.988V20.4633C136.416 18.9172 137.668 17.6625 139.217 17.6625H182.904C184.453 17.6625 185.705 18.9172 185.705 20.4633V85.988C185.705 87.0467 185.105 88.0186 184.156 88.4919C183.758 88.6936 183.33 88.7888 182.904 88.7888ZM161.061 66.8277C161.652 66.8277 162.243 67.0126 162.741 67.3879L180.103 80.392V23.2641H142.018V80.392L159.38 67.3879C159.879 67.0154 160.47 66.8277 161.061 66.8277Z"
                                        fill="white" />
                                    <path
                                        d="M110.84 230.828C107.801 230.828 104.762 230.495 101.801 229.834L69.1356 222.549C65.6038 221.765 61.9796 221.365 58.3693 221.365H35.4448C33.8987 221.365 32.644 220.113 32.644 218.564V178.602C32.644 177.851 32.9437 177.134 33.4786 176.605C34.0136 176.078 34.8034 175.79 35.4868 175.801L50.4039 176.036C51.7314 176.101 52.9918 175.557 54.0225 174.658C66.304 163.926 77.6668 156.392 96.3398 151.986C99.6503 151.244 102.913 150.611 106.207 149.967C117.231 147.816 128.63 145.595 142.026 139.253C147.718 136.562 152.403 136.652 155.946 139.514C158.775 141.808 160.559 145.595 160.492 149.16C160.439 152.039 159.221 154.518 157.064 156.137C144.934 165.231 135.024 169.623 125.443 173.869C123.286 174.826 121.202 175.748 119.141 176.706C137.119 188.035 174.502 181.383 202.283 176.434C208.47 175.325 214.514 179.039 216.351 185.047C218.219 191.136 215.214 197.622 209.36 200.137L145.287 227.199C140.282 229.35 134.968 230.484 129.512 230.562L111.433 230.826C111.24 230.828 111.038 230.828 110.84 230.828ZM129.476 227.764H129.504H129.476ZM38.2484 215.763H58.3721C62.3913 215.763 66.4244 216.205 70.3568 217.082L103.025 224.37C105.753 224.98 108.565 225.274 111.36 225.227L129.44 224.964C134.162 224.896 138.758 223.913 143.102 222.048L207.176 194.987C210.38 193.609 212.03 190.04 211.005 186.691C209.993 183.386 206.66 181.341 203.272 181.952C172.426 187.444 130.176 194.964 111.929 178.229C111.248 177.605 110.921 176.689 111.05 175.776C111.176 174.866 111.744 174.073 112.568 173.659C116.099 171.888 119.539 170.365 123.183 168.752C132.478 164.632 142.094 160.372 153.711 151.658C154.476 151.081 154.879 150.205 154.902 149.056C154.938 147.18 153.941 145.093 152.426 143.864C151.314 142.962 149.267 142.026 144.432 144.315C130.403 150.958 118.654 153.246 107.291 155.462C104.048 156.095 100.835 156.719 97.6057 157.442C80.0139 161.59 69.6538 168.443 57.7167 178.874C55.6526 180.68 53.0562 181.649 50.345 181.632L38.254 181.442V215.763H38.2484Z"
                                        fill="white" stroke="white" stroke-width="3" />
                                    <path
                                        d="M38.2484 239.838H39.7484V238.338V169.172V167.672H38.2484H1.96399H0.463989V169.172V238.338V239.838H1.96399H38.2484ZM31.1468 231.236H9.06559V176.273H31.1468V231.236Z"
                                        fill="white" stroke="white" stroke-width="3" />
                                    <path
                                        d="M251.235 192.382H214.102C212.553 192.382 211.301 191.13 211.301 189.581C211.301 188.032 212.553 186.78 214.102 186.78H248.434V23.2641H73.6841V166.34C73.6841 167.889 72.4293 169.141 70.8833 169.141C69.3372 169.141 68.0825 167.889 68.0825 166.34V20.4633C68.0825 18.9172 69.3372 17.6625 70.8833 17.6625H251.235C252.784 17.6625 254.036 18.9172 254.036 20.4633V189.581C254.036 191.13 252.784 192.382 251.235 192.382Z"
                                        fill="white" stroke="white" stroke-width="5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_204_2">
                                        <rect width="256" height="256" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>


                        </div>

                        <a href="{{ route('suplier.index') }}" class="small-box-footer bg-red"> Lihat Detail <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-8">
                    <!-- small box -->
                    <div class="small-box" style="font-weight: bold; background-color: #26BBB0  ">
                        <div class="inner">
                            <p>data pembeli</p>
                            <h3 style="text-align: center;"></h3>
                            <h3><b>{{ DB::table('pelanggans')->count() }}</b></h3>


                        </div>
                        <div class="icon">
                            <svg width="100" height="84" viewBox="0 0 100 84" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_203_2)">
                                    <path
                                        d="M83.685 27.454L100 18.392L96.399 16.446L66.621 0.221L50.215 9.173L33.359 0L0 18.145L3.548 20.144L16.556 27.371L16.4 27.448H16.387V27.461L0.287 36.231L16.387 44.883V66.635L49.994 83.373L83.607 66.635V44.948L99.837 36.231L83.685 27.454ZM66.621 5.345L90.657 18.425L79.023 24.896L54.713 11.843L66.621 5.345ZM9.323 18.19L33.359 5.11L45.273 11.594L20.951 24.661L9.323 18.19ZM9.727 36.211L21.635 29.707L45.912 42.838L34.037 49.257L9.727 36.211ZM20.892 63.841V47.311L34.076 54.394L47.748 46.803V77.213L20.892 63.841ZM79.114 63.841L52.259 77.207V46.751L66.009 54.394L79.114 47.363V63.841ZM90.371 36.198L66.055 49.258L54.382 42.839L78.444 29.708L90.371 36.198Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_203_2">
                                        <rect width="100" height="83.373" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>


                        </div>
                        <a href="{{ route('pelanggan.index') }}" class="small-box-footer bg-red"> Lihat Detail <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
    </body>

    </html>
@endsection
