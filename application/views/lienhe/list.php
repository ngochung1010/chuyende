<div class="container">
    <div class="card">
        <div class="card-header">
            Danh Sách Liên Hệ
        </div>
        <!-- thông báo  -->
        <?php
        if($this->session->flashdata('success')){
            ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('success') ?></div>
            <?php
                }elseif($this->session->flashdata('error')){
            ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error') ?></div>
            <?php
            }
        ?>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên Khách Hàng</th>
                <th scope="col">Email</th>
                <th scope="col">SĐT</th>
                <th scope="col">Ghi Chú</th>
               
                <th scope="col">Tình trạng</th>
                <th scope="col">Quản Lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lienhe as $key => $lh){
                ?>
                <tr>
                <th scope="row"><?php echo $key += 1 ?></th>
                <td><?php echo $lh->ten?></td>
                <td><?php echo $lh->email?></td>
                <td><?php echo $lh->sdt?></td>
                <td><?php echo $lh->ghichu?></td>
            
                <td>
                    <?php  
                    if($lh->tinhtrang == 1)
                    {
                        echo '<span class="text text-success">Đã Liên Hệ</span>';
                    }
                    else
                    {
                        echo '<span class="text text-danger">Chưa Liên Hệ</span>';
                    }
                    ?>
                </td>
                <td>
                    <a onclick="return confirm('Bạn Có Muốn Xóa Hay Không???')" href="<?php echo base_url('lienhe/delete/'.$lh->id) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a> 
                    <a onclick="return confirm('Bạn chắc chắn đã liên hệ với khách hàng này.')" href="<?php echo base_url('lienhe/delete/'.$lh->id) ?>" class="btn btn-success"><i class="fa-solid fa-pen"></i></a> 
                </td>
               
                <?php
                }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>