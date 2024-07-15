@extends('dashboard.templates.main')
@section('content')
<main>
    <div class="" style="display:flex;justify-content:space-between">
        <h2 class="dash-title">Detail Custom ID {{ $custom->id }} User {{ $custom->user_id }}</h2>
        <a href="/dashboard/custom">Back</a>
    </div>
    <section class="recent">
        <div>
            <div class="activity-card">
                <table class="table">
                        <tr>
                        <td>Jenis Kain</td>
                        <td>:</td>
                        <td>{{ $custom->kain }}</td>
                        </tr>
                        <tr>
                        <td>Panjang Lengan</td>
                        <td>:</td>
                        <td>{{ $custom->lengan }}</td>
                        </tr>
                        <tr>
                        <td>Desain Model</td>
                        <td>:</td>
                        <td>{{ $custom->model }}</td>
                        </tr>
                        <tr>
                        <td>Penerapan Kain</td>
                        <td>:</td>
                        <td>{{ $custom->penerapan_kain }}</td>
                        </tr>
                        <tr>
                        <td>Lebar Dada</td>
                        <td>:</td>
                        <td>{{ $custom->lebar_dada }}</td>
                        </tr>
                        <tr>
                        <td>Lebar Pundak</td>
                        <td>:</td>
                        <td>{{ $custom->lebar_pundak }}</td>
                        </tr>
                        <tr>
                        <td>Panjang Baju</td>
                        <td>:</td>
                        <td>{{ $custom->panjang_baju }}</td>
                        </tr>
                        <tr>
                        <td>Panjang Lengan</td>
                        <td>:</td>
                        <td>{{ $custom->panjang_lengan }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</main>   
@endsection;