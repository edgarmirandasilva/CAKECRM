<hr>
<div class="col-md-12 menucred">
    <?= $this->Html->link(__('Adicionar nova'), ['action' => 'add'], ['class' => 'btn flat-butt flat-info-butt col-md-12']) ?>
</div>
</br>
<hr>

<?php foreach ($credencias as $credencia): ?>
<div class="col-md-4"> 
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-active">
                  <h3 class="widget-user-username"><?php echo $credencia->cliente->nome; ?></h3>
                  <h5 class="widget-user-desc">Founder &amp; CEO</h5>
                </div>
                <div class="widget-user-image">
                    <?php echo $this->Html->image('uploads/' . $credencia->cliente->logo, ['class' => 'img-circle']); ?>
                </div>
                <div class="box-footer">
                    <div class="btn-group pull-right" role="group" aria-label="...">
                      <?= $this->Html->link(__('Ver'), ['action' => 'view', $credencia->id], ['class' => 'btn flat-butt flat-info-butt']) ?>
                 <?= $this->Html->link(__('Editar'), ['action' => 'edit', $credencia->id], ['class' => 'btn flat-butt flat-info-butt']) ?>
                </div>
                    </div>
              </div><!-- /.widget-user -->
            </div>

<?php endforeach; ?>