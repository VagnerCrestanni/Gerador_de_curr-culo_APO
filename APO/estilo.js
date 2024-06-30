     $(document).ready(function() {
        // Calcula a idade automaticamente
        $('#data_nascimento').on('change', function() {
            const birthDate = new Date($(this).val());
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            $('#idade').val(age);
        });
    });
    
    // Adiciona novo hisórico de fomação
    $('#add-historico').on('click', function() { 
        const historicoHTML = `
        <div class="historico">
            <input type="text" name="historico_formação[]" placeholder="formação" class="form-control" required>
                </br>
                    <input type="text" name="historico_instituição[]" placeholder="Instituição" class="form-control" required>
                </br>
                    <input type="date" name="historico_inicio[]" placeholder="Data de Início" class="form-control" required>
                </br>
                    <input type="date" name="historico_fim[]" placeholder="Data de Fim" class="form-control">
        </div>`;
        $('#historico_educacional').append(historicoHTML);
     });
     //adiona nova experiência
     $('#add-experiencia').on('click', function() { 
        const experienciaHTML = `
        <div class="experiencia">
             <input type="text" name="experiencia_função[]" placeholder="função" class="form-control" required>
                </br>
                    <input type="text" name="experiencia_empresa[]" placeholder="Empresa" class="form-control" requir>
                </br>
                    <input type="date" name="experiencia_inicio[]" placeholder="Data de Início" class="form-control" required>
                </br>
                    <input type="date" name="experiencia_fim[]" placeholder="Data de Fim" class="form-control">
        </div>`;
        $('#experiencias').append(experienciaHTML);
    });
    
    //adiciona idiomas
    $('#add-idiomas').on('click', function() { 
        const idiomasHTML = `
        <div class="idiomas">
            <input type="text" name="idiomas[]" placeholder="idiomas" class="form-control" required>
        </div>`;
        $('#idiomas').append(idiomasHTML);
    });

    //adiciona habilidade
    $('#add-competencias').on('click', function() { 
        const competenciasHTML = `
        <div class="competencias">
            <input type="text" name="competencias[]" placeholder="habilidade" class="form-control" required>
        </div>`;
        $('#competencias').append(competenciasHTML);
    });

    function generatePDF() {
        window.print();
    }
