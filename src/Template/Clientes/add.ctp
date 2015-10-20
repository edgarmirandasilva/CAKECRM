
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Ficha do cliente</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Detalhes do cliente</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Categorias & Estado</p>
        </div>
    </div>
</div>
 <?=$this->Form->create($cliente);?>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Ficha do cliente</h3>
                 <div class="form-group">
                    <label class="control-label">Nome do cliente</label>
                   <?= $this->Form->input('nome',array('label' =>false));?>
                </div>
                <div class="form-group">
                    <label class="control-label">Morada</label>
                   <?= $this->Form->input('morada',array('label' =>false));?>
                </div>
                <div class="form-group">
                    <label class="control-label">Código postal</label>
                    <?= $this->Form->input('codigopostal',array('label' =>false));?>
                </div>
                <div class="form-group">
                     <label class="control-label">Numero de idêntificação fiscal</label>
                    <?= $this->Form->input('nif',array('label' =>false));?>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Detalhes do cliente</h3>
                 <div class="form-group">
                     <label class="control-label">Site do cliente</label>
                    <?= $this->Form->input('site',array('label' =>false));?>
                </div>
                 <div class="form-group">
                     <label class="control-label">Email</label>
                    <?= $this->Form->input('email',array('label' =>false));?>
                </div>
                 <div class="form-group">
                     <label class="control-label">Telefone</label>
                    <?= $this->Form->input('tel',array('label' =>false));?>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Categorias & Estado</h3>
                <label class="control-label">Selecione a área de negíocio</label>
                <?= $this->Form->input('anegocio_id', array('options' => $anegocio, 'empty' => true, 'class' => 'form-control','label' =>false));?>
                <label class="control-label">Já é cliente?</label>
                <?= $this->Form->input('estado_id', array('options' => $estado, 'empty' => true,'class' => 'form-control','label' =>false)); ?>
                <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>