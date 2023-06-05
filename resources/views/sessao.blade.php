<div class="d-grid d-md-block">
    @foreach($dadossessao as $dadossessaos)
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
        data-bs-target="#{{$dadossessaos->timeSessao}}">{{$dadossessaos->timeSessao}}</button>

    <!-- Modal -->
    <div class="modal fade" id="{{$dadossessaos->timeSessao}}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <main>
                        <div class="container">
                            <h1>Seleção de Lugares</h1>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="seats">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">A-1
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">B-1
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">C-1
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat unavailable">Reservado</div>
                                                    <div class="col-md-1 seat unavailable">Reservado</div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">F-1
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">G-1
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">I-1
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat unavailable">Reservado</div>
                                                    <div class="col-md-1 seat unavailable">Reservado</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="seats">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">A-2
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">B-2
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">C-2
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">D-2
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">E-2
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">F-2
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat unavailable">Reservado</div>
                                                    <div class="col-md-1 seat unavailable">Reservado</div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">I-2
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">J-2
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="seats">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-1 seat unavailable">Reservado</div>
                                                    <div class="col-md-1 seat unavailable">Reservado</div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">C-3
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">D-3
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">E-3
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">F-3
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">G-3
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">H-3
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">I-3
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">J-3
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="seats">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">A-4
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">B-4
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">C-4
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">D-4
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">E-4
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">F-4
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">G-4
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">H-4
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">I-4
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">J-4
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="seats">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">A-5
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">B-5
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">C-5
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">D-5
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">E-5
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">F-5
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">G-5
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">H-5
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">I-5
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">J-5
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="seats">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">A-6
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">B-6
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">C-6
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">D-6
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">E-6
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">F-6
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">G-6
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">H-6
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">I-6
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1 seat">
                                                        <a href="#">
                                                            <img src="./img/cadeira.png" alt="Assento">J-6
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="retangulo"></div>
                                                <div class="screen">
                                                    <h4>Tela</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="booking-info" style="display: none;">
                                        <h3>Informações de Reserva</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item">Filme: Nome do Filme</li>
                                            <li class="list-group-item">Data: DD/MM/AAAA</li>
                                            <li class="list-group-item">Horário: HH:MM</li>
                                            <li class="list-group-item">Lugares selecionados: <span
                                                    id="selected-seats">-</span></li>
                                        </ul>
                                        <button class="btn botoes mt-3" onclick="confirmBooking()">Confirmar
                                            Reserva</button>
                                    </div>
                                    <div class="booking-buttons">
                                        <button class="btn botoes mt-3" onclick="showBookingInfo()">Mostrar Informações
                                            de Reserva</button>
                                        <button class="btn botoes mt-3" style="display: none;"
                                            onclick="hideBookingInfo()">Mostrar Menos</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            const seats = document.querySelectorAll('.seat');
                            const selectedSeats = new Set();

                            function bookSeat() {
                                const selectedSeat = document.querySelector('.seat.selected');
                                if (selectedSeat) {
                                    selectedSeat.classList.remove('selected');
                                    document.getElementById('selected-seat').textContent = '-';
                                    alert('Lugar reservado com sucesso!');
                                } else {
                                    alert('Selecione um lugar para reservar.');
                                }
                            }

                            seats.forEach(seat => {
                                seat.addEventListener('click', () => {
                                    if (!seat.classList.contains('unavailable')) {
                                        seat.classList.toggle('selected');
                                        const seatNumber = seat.innerText;
                                        if (selectedSeats.has(seatNumber)) {
                                            selectedSeats.delete(seatNumber);
                                        } else {
                                            selectedSeats.add(seatNumber);
                                        }
                                        document.getElementById('selected-seats').textContent = selectedSeats.size > 0 ? [...selectedSeats].join(', ') : '-';
                                    }
                                });
                            });

                            document.addEventListener('DOMContentLoaded', function () {
                                document.querySelector('.booking-info').style.display = 'none';
                            });

                            function showBookingInfo() {
                                document.querySelector('.booking-info').style.display = 'block';
                                document.querySelector('.booking-buttons button:first-child').style.display = 'none';
                                document.querySelector('.booking-buttons button:last-child').style.display = 'block';
                            }

                            function hideBookingInfo() {
                                document.querySelector('.booking-info').style.display = 'none';
                                document.querySelector('.booking-buttons button:first-child').style.display = 'block';
                                document.querySelector('.booking-buttons button:last-child').style.display = 'none';
                            }

                            function confirmBooking() {
                                if (selectedSeats.size > 0) {
                                    const filmName = 'Nome do Filme';
                                    const date = 'DD/MM/AAAA';
                                    const time = 'HH:MM';

                                    const url = 'carrinho.html' + '?seats=' + [...selectedSeats].join(',') + '&film=' + filmName + '&date=' + date + '&time=' + time;

                                    alert('Reserva confirmada! Redirecionando para o carrinho em alguns segundos...');

                                    setTimeout(function () {
                                        window.location.href = url;
                                    }, 1000);
                                } else {
                                    alert('Por favor, selecione pelo menos um lugar antes de confirmar a reserva.');
                                }
                            }
                        </script>
                    </main>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>