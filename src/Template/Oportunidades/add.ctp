<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Detalhes da oportunidade</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Escolher responsavel</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Escolher cliente</p>
        </div>
    </div>
</div>
<?= $this->Form->create($oportunidade) ?>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Detalhes da oportunidade</h3>
                <div class="form-group">
                    <label class="control-label">Descreve a oportunidade</label>
                    <?= $this->Form->textarea('descri',array('label' =>false));?>
                </div>
                 <div class="form-group">
                    <label class="control-label">Qual é o tipo da oportunidade?</label>
                   <?= $this->Form->input('tiposoportunidade_id', array('options' => $tiposoportunidade, 'empty' => true,'label' =>false));?>
                </div>
                <div class="form-group">
                    <label class="control-label">Qual é a origem da venda?</label>
                   <?= $this->Form->input('origemvenda_id', array('options' => $origemvenda, 'empty' => true, 'label' =>false));?>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Seguinte</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> A quem pertence a oportunidade?</h3>
                <div class="form-group">
                    <?= $this->Form->input('users_id', array('options' => $users, 'label' =>false));?>
                </div>
                <div class="form-group">
                    <label class="control-label">Observarções</label>
                   <?= $this->Form->textarea('obs',array('label' =>false))?>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Seguinte</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> A que cliente pertence esta oportunidade?</h3>
                <?= $this->Form->input('clientes_id', array('options' => $clientes, 'empty' => true, 'label' =>false));?>
                <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</form>
</div>
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