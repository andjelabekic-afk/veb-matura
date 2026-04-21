(function () {
    const canvas = document.getElementById('chartCanvas');
    if (!canvas || !Array.isArray(window.chartData) || window.chartData.length === 0) {
        return;
    }

    const ctx = canvas.getContext('2d');
    const data = window.chartData;

    const width = canvas.width;
    const height = canvas.height;

    const margin = {
        top: 18,
        right: 24,
        bottom: 42,
        left: 34
    };

    const chartWidth = width - margin.left - margin.right;
    const chartHeight = height - margin.top - margin.bottom;
    const maxValue = 5;
    const minValue = 0;
    const steps = 5;

    function clearCanvas() {
        ctx.clearRect(0, 0, width, height);
    }

    function drawAxes() {
        ctx.strokeStyle = '#333333';
        ctx.lineWidth = 1;

        ctx.beginPath();
        ctx.moveTo(margin.left, margin.top);
        ctx.lineTo(margin.left, margin.top + chartHeight);
        ctx.lineTo(margin.left + chartWidth, margin.top + chartHeight);
        ctx.stroke();
    }

    function drawGridAndLabels() {
        ctx.font = '12px Arial';
        ctx.fillStyle = '#333333';
        ctx.textAlign = 'right';
        ctx.textBaseline = 'middle';

        for (let i = 0; i <= steps; i += 1) {
            const value = minValue + i;
            const y = margin.top + chartHeight - (i / steps) * chartHeight;

            ctx.beginPath();
            ctx.strokeStyle = '#616161';
            ctx.lineWidth = 1;
            ctx.moveTo(margin.left, y);
            ctx.lineTo(margin.left + chartWidth, y);
            ctx.stroke();

            ctx.fillText(String(value), margin.left - 5, y);
        }
    }

    function drawBars() {
        const count = data.length;
        const slotWidth = chartWidth / count;
        const barWidth = Math.min(38, slotWidth * 0.6);

        ctx.textAlign = 'center';
        ctx.textBaseline = 'top';
        ctx.font = '12px Arial';

        data.forEach((item, index) => {
            const value = Number(item.prosek);
            const barHeight = ((value - minValue) / (maxValue - minValue)) * chartHeight;
            const x = margin.left + index * slotWidth + (slotWidth - barWidth) / 2;
            const y = margin.top + chartHeight - barHeight;

            ctx.fillStyle = '#4a89dc';
            ctx.fillRect(x, y, barWidth, barHeight);

            ctx.fillStyle = '#333333';
            ctx.fillText(String(item.razred), x + barWidth / 2, margin.top + chartHeight + 8);
        });
    }

    clearCanvas();
    drawGridAndLabels();
    drawAxes();
    drawBars();
})();
