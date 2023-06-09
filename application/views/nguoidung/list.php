<div class="container">
    <div class="card">
        <div class="card-header">
            Danh Sách Người Dùng
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
                <th scope="col">Địa Chỉ</th>
                <th scope="col">Giới Tính</th>
                <th scope="col">SĐT</th>
               
                <th scope="col">Tình trạng</th>
                <th scope="col">Quản Lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($nguoidung as $key => $nd){
                ?>
                <tr>
                <th scope="row"><?php echo $key += 1 ?></th>
                <td><?php echo $nd->tenkh?></td>
                <td><?php echo $nd->email?></td>
                <td class="text-break" style="max-width: 200px;"><?php echo $nd->diachi?></td>
                <td>
                    <?php 
                    if($nd->gioitinh == 1)
                    {
                        echo 'Nam';
                    }
                    else
                    {
                        echo 'Nữ';
                    }
                    ?>
                </td>
                <td><?php echo $nd->sdt?></td>
            
                <td>
                    <?php  
                    if($nd->tinhtrang == 1)
                    {
                        echo '<span class="text text-success">Đã Kích Hoạt</span>';
                    }
                    else
                    {
                        echo '<span class="text text-danger">Chưa Kích Hoạt</span>';
                    }
                    ?>
                </td>
                <td>
                    <a onclick="return confirm('Bạn Có Muốn Xóa Người Dùng Này Hay Không???')" href="<?php echo base_url('nguoidung/delete/'.$nd->id) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a> 
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