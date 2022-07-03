<template> 

    <div class="info-data">
        <div class="card">
            <div class="head">
                <div>
                    <h2>1500</h2>
                    <p>Traffic</p>
                </div>
                <i class='bx bx-trending-up icon' ></i>
            </div>
            <span :style="{ '--value': 40 + '%' }" class="progress" data-value="40%"></span>
            <span class="label">40%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>234</h2>
                    <p>Sales</p>
                </div>
                <i class='bx bx-trending-down icon down' ></i>
            </div>
            <span :style="{ '--value': 60 + '%' }" class="progress" data-value="60%"></span>
            <span class="label">60%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>465</h2>
                    <p>Pageviews</p>
                </div>
                <i class='bx bx-trending-up icon' ></i>
            </div>
            <span :style="{ '--value': 30 + '%' }" class="progress" data-value="30%"></span>
            <span class="label">30%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>235</h2>
                    <p>Visitors</p>
                </div>
                <i class='bx bx-trending-up icon' ></i>
            </div>
            <span :style="{ '--value': 80 + '%' }" class="progress" data-value="80%"></span>
            <span class="label">80%</span>
        </div>
    </div>
</template>  

<script setup>  
    
      
</script>


